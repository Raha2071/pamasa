<?php namespace App\Controllers;

use App\Models\BrancheinfoModel;
use App\Models\BrancheModel;
use App\Models\BrancheProduct;
use App\Models\CategoryModel;
use App\Models\InvoicesModel;
use App\Models\SellingModel;
use App\Models\UserModel;
use App\Models\ClientModel;
use App\Models\InvoiceModel;
use App\Models\ProduitModel;

class Home extends BaseController
{
	private $data = array();
	private $log_status = "Soma_logged_in";

	public function _preset()
	{
		$this->session->set("return_url", current_url());
		if ($this->session->get($this->log_status) == null) {
			header("location: " . base_url(''));
			die();
		} else if ($this->session->get('t_lock_status') != null) {
			header("location: " . base_url(''));
			die();
		}
	}

	public function dashboard()
	{
		$this->_preset();
		$data = array();
		$data['title']='Home';
		$data['content'] = view("dashboard");
		return view('base',$data);
	}
	public function employees()
	{
		$this->_preset();
		// $mdl = new BranchesModel();
		$eMdl = new UserModel();
		$data = array();
		$data['title'] = "Employees";
		// $data['branches'] = $mdl->select('*')->get()->getResultArray();
		// $data['employees'] = $eMdl->select('users.*,b.name as branche')->join("branches b", "users.brancheId=b.id", "LEFT")->get()->getResultArray();
		$data['employees']= $eMdl->select('users.*')->get()->getResultArray();
		$data['content'] = view("employees", $data);
		return view('layout', $data);
	}

	public function index()
	{
		$data = array();
		$data["email"] = $this->session->getFlashdata("email");
		$data["error"] = $this->session->getFlashdata("error");
		return view('login', $data);
	}

	public function logout($msg = null)
	{
		session_destroy();
		$this->session->setFlashdata("error", $msg);
		return redirect()->to(base_url(''));
	}

	function login_pro()
	{
		$model = new UserModel();
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$validation = \Config\Services::validation();
		$validation->setRule("email", 'email', 'trim|required');
		$validation->setRule("password", 'password', 'required|min_length[6]');
//		if (strtotime(date('d-m-Y')) >= strtotime($this->users)) {
//			return redirect()->to(base_url(""));
//		}
		if ($validation->run() !== FALSE) {
			$this->session->setFlashdata('email', $email);
			if ($this->request->getGet("type", true) == "ajax") {
				echo '{"type":"error","msg":"' . $validation->getError() . '"}';
			} else {
				$this->session->setFlashdata('error', $validation->getError());
				$this->session->setFlashdata('email', $email);
				echo "error";
				die();
				return redirect()->to(base_url(""));
			}
		} else {
			$result = $model->checkUser($email);
			$this->session->setFlashdata('email', $email);
			if ($result != null) {
				if (password_verify($password, $result->password)) {
					if ($result->status == 1 || $result->status == 2) {
						$data = array(
							'shop_name' => $result->names,
							'shop_email' => $result->email,
							'shop_id' => $result->id,
							'shop_privilege' => $result->priviledge,
							'branche_id' => $result->brancheId,
							'shop_status' => $result->status,
							$this->log_status => true
						);
						$this->session->set($data);
						$model->updateLogin($result->id);
						if ($this->request->getGet("type", true) == "ajax") {
							echo '{"type":"success","msg":"login done"}';
						} else {
							return redirect()->to(base_url('dashboard'));
						}
					} else {
						if ($this->request->getGet("type", true) == "ajax") {
							echo '{"type":"error","msg":"Account not active"}';
						} else {
							$this->session->setFlashdata('error', "Account not active");
							return redirect()->to(base_url(""));
						}
					}
				} else {
					if ($this->request->getGet("type", true) == "ajax") {
						echo '{"type":"error","msg":"Password not correct"}';
					} else {
						$this->session->setFlashdata('error', "Password not correct");
						return redirect()->to(base_url(""));
					}
				}
			} else {
				if ($this->request->getGet("type", true) == "ajax") {
					echo '{"type":"error","msg":"User not found"}';
				} else {
					$this->session->setFlashdata('error', "User not found");
					return redirect()->to(base_url(""));
				}
			}
		}
	}
	public function mainstore()
	{
		$this->_preset();
		$data = array();
		$Mdl = new ProduitModel();
		$cModel = new CategoryModel();
		$data['category']=$cModel->select('*')->get()->getResultArray();
		$data['products'] = $Mdl->select('*')->orderBy('id','DESC')->get()->getResultArray();
		$data['title']='Stcok';
		$data['content'] = view("mainstore",$data);
		return view('base',$data);
	}
	public function brancheemployees($brancheId){
		$this->_preset();
		$data = array();
		$Mdl = new UserModel();
		$cModel = new BrancheModel();
		// $data['branche']=$cModel->select('*')->where('branche.id',$brancheId)->get()->getResultArray();
		$data['users'] = $Mdl->select('users.*')
		->join('branche b','users.brancheId=b.id')
		->where('users.brancheId',$brancheId)
		->get()->getResultArray();
		$data['title']='Branche-Employee';
		$data['content'] = view("brancheemployee",$data);
		return view('base',$data);
	}
	public function brancheproducts($id){
		$this->_preset();
		$data = array();
		$pMdl = new BrancheinfoModel();
		$mdl = new BrancheModel();
		$Mdls = new ProduitModel();
		$data['branchId'] = $id;
		$data['clients'] = $mdl->select("branche.id,branche.names,branche.location")
		->where("id", $id)->get()->getRowArray();
		$data['branchep'] = $pMdl->select("brancheproductinfo.*,in.infoId,in.id as proId, in.quantity as qty,in.lastprice,st.names as produit,in.usedQuantity,in.sellingprice")
			->join("brancheproduct in","brancheproductinfo.id=in.infoId")
				->join("products st", "in.productId=st.id")
				->where("brancheproductinfo.brancheId", $id)
				->orderBy('in.id','DESC')
				->get()->getResultArray();
		$data['archives'] = $pMdl->select("brancheproductinfo.id as archiveId,brancheproductinfo.brancheId,brancheproductinfo.created_at,brancheproductinfo.createdBy")
		->where('brancheproductinfo.brancheId',$id)->orderBy('id','DESC')->get()->getResultArray();
		$data['products'] = $Mdls->select('products.id,products.names')->get()->getResultArray();
		$data['title']='Branche-Products';
		return view('brancheproduct',$data);
		
	}
	public function manipulate_items(){
		$id = $this->request->getPost('itemId');
		$qty = $this->request->getPost('quantity');
		$brancheId = $this->request->getPost('Id');
		$sellingPrice =$this->request->getPost('purchasedPrice');
		$branche = $this->request->getPost('brancheId');
		$lastprice = $this->request->getPost("sellprice");
		$pMdl = new ProduitModel();
		$iMdl = new BrancheinfoModel();
		$bMdl = new BrancheProduct();
		$checker = $pMdl->select("quantity,usedQuantity")->where("id", $id)->get()->getRowArray();
		
		if (($checker['quantity'] - $checker['usedQuantity']) - $qty < 0) {
			return $this->response->setJSON(array("error" => "Sorry ! La quantite disponible est de: " . ($checker['quantity'] - $checker['usedQuantity']) . " seulement."));
		}
		if($checker['usedQuantity']>=0){
			$pMdl->update($id,array("usedQuantity"=>$checker['usedQuantity']+$qty));
			// echo "{'success':'updated'}";
		}
		if($lastprice > $sellingPrice){
			return $this->response->setJSON(array("error"=>"Le prix de reduction ne doit pas etre superieur au prix de Vente global"));
		}
		$dqty =$checker['quantity'] - $checker['usedQuantity']-$qty;
		try{
			if ($branche == '') {
				$info = array(
					'brancheId' =>$brancheId,
					'status' =>0,
					'createdBy' => $this->session->get('shop_id'),
				);
				$iMdl->insert($info);
        		$branche_id = $iMdl->getInsertID();
				$records = array(
					'productId' => $id,
					'infoId' => $branche_id,
					'quantity' => $qty,
					'sellingprice' => $sellingPrice,
					'lastprice' => $lastprice,
					'createdBy' => $this->session ->get('shop_id'),
				);
				$bMdl->save($records);
				$brancheTbl = $bMdl->select("brancheproduct.infoId,brancheproduct.lastprice,brancheproduct.id as ids,brancheproduct.productId as proId,brancheproduct.sellingprice
				,brancheproduct.quantity as qty,st.names as produit")
				->join("products st", "brancheproduct.productId=st.id")
				->where("brancheproduct.infoId", $branche_id)->get()->getResult();
				return $this->response->setJSON(array("success" => "Added", "branche" => $branche_id,"dqty"=>$qty, "records" => $brancheTbl));
			} else {
				$records = array(
					"productId" => $id,
					'infoId' => $branche,
					'quantity' => $qty,
					'lastprice' => $lastprice,
					'sellingprice' => $sellingPrice,
					'createdBy' => $this->session ->get('shop_id'),
				);
				$bMdl->save($records);
				$brancheTbl = $bMdl->select("brancheproduct.infoId,brancheproduct.lastprice,brancheproduct.id as ids, brancheproduct.productId as proId,brancheproduct.sellingprice
				,brancheproduct.quantity as qty,st.names as produit")
				->join("products st", "brancheproduct.productId=st.id")->where("brancheproduct.infoId", $branche)->get()->getResult();
				return $this->response->setJSON(array("success" => "Added","dqty"=>$dqty, "records" => $brancheTbl));
			}
		}catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function removeItem($id = null){
		$Mdl = new BrancheProduct();
		$Mdls = new ProduitModel();
		$information = $Mdl->select("brancheproduct.quantity as qty,brancheproduct.productId,st.usedQuantity,st.quantity as avqty")
		->join("products st", "brancheproduct.productId=st.id")
		->where("brancheproduct.id",$id)
		->get()->getRowArray();
			$idp=$information['productId'];
			$iqty = $information['usedQuantity']-$information['qty'];
			$qty = $information['avqty']-$information['usedQuantity']+$information['qty'];
			$info = array(
				"usedQuantity" => $iqty);

		$data = array("id" => $id);
		try {
			$Mdls->update($idp,$info);
			$Mdl->delete($data);
			echo '{"qty":"'.$qty.'","prodId":"'.$idp.'"}';
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function saveSheet(){
		$this->_preset();
		$productId = $this->request->getPost("productId[]");
		$qty = $this->request->getPost("quantity[]");
			echo '{"success":"Saved"}';
	}
	public function branches(){
		$this->_preset();
		$data = array();
		$Mdl = new UserModel();
		$cModel = new BrancheModel();
		$data['branches']=$cModel->select('*')->get()->getResultArray();
		$data['users'] = $Mdl->select('users.id,users.names,users.priviledge,users.status')
			->where('users.priviledge','2')
			->get()->getResultArray();
		$data['title']='Branches';
		$data['content'] = view("branche",$data);
		return view('base',$data);
	}
	public function employee(){
		$this->_preset();
		$data = array();
		$Mdl = new UserModel();
		$bMdl = new BrancheModel();
		$data['branches'] = $bMdl->select('branche.id,branche.names,branche.location')->get()->getResultArray();
		$data['users'] = $Mdl->select('*')->orderBy('id','DESC')->get()->getResultArray();
		$data['title']='Users';
		$data['content'] = view("employee",$data);
		return view('base',$data);
	}
	public function manipulationProduct(){
		$this->_preset();
		$qty = 1;
		$id = $this->request->getPost("productId");
		$name = $this->request->getPost("names");
		$category = $this->request->getPost("category");
		$quantityCarton= $this->request->getPost('qtypieces');
		$quantity = $this->request->getPost("quantity");
		$purchased = $this->request->getPost("purchasedPrice");
		$sellingPrice = $this->request->getPost("sellingPrice");
		$desc = $this->request->getPost("description");
		if ($quantityCarton != "") {
			$qty = $quantityCarton * $quantity;
		} else {
			$qty = $quantity;
		}
		$Mdl = new ProduitModel();
		try {
			if ($id == "") {
				$Mdl->save(array(
					"categoryId" => $category,
					"names" => $name,
					"quantity" => $qty,
					"purchasedprice" => $purchased,
					"sellingPrice" => $sellingPrice,
					"description" => $desc,
					"createdBy" => $this->session->get("shop_id"),
				));
			} else {
				$Mdl->save(array(
					"id" => $id,
					"categoryId" => $category,
					"names" => $name,
					"quantity" => $qty,
					"purchasedprice" => $purchased,
					"sellingPrice" => $sellingPrice,
					"description" => $desc,
				));
			}

			echo '{"success":"Saved"}';
		} catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function viewDetails($id=null){
		$Mdl = new ProduitModel();
		$builder = $Mdl->select('quantity,usedQuantity,sellingPrice')->where('id',$id);
		try {
			$data = $builder->get()->getRowArray();
			echo json_encode($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function manipulation_User(){
		$id = $this->request->getPost('Id');
		$name = $this->request->getPost('names');
		$email = $this->request->getPost('email');
		$phone = $this->request->getPost('phone');
		$address = $this->request->getPost('address');
		$brancheId = $this->request->getPost('brancheId');
		$role = $this->request->getPost('role');
		$status = $this->request->getPost('status');
		$uMdl = new UserModel();
		try {
			if ($id == "") {
				$uMdl->save(array(
					"brancheId" => $brancheId,
					"names" => $name,
					"phone" => $phone,
					"email" => $email,
					"priviledge" => $role,
					"password" => password_hash("123456", PASSWORD_DEFAULT),
					"status" => $status,
					"address" => $address,
					"created_by" => $this->session->get("shop_id"),
				));
			} else {
				$uMdl->save(array(
					"id" => $id,
					"brancheId" => $brancheId,
					"names" => $name,
					"phone" => $phone,
					"email" => $email,
					"priviledge" => $role,
					"status" => $status,
					"address" => $address,
				));
			}

			echo '{"success":"Saved"}';
		} catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function manipulation_branche(){
		$id = $this->request->getPost('Id');
		$names = $this->request->getPost('names');
		$location = $this->request->getPost('location');
		$manager = $this->request->getPost('employeeId');
		$desc = $this->request->getPost('description');
		$status = $this->request->getPost('status');
		$bMdl = new BrancheModel();
		try {
			if ($id == "") {
				$bMdl->save(array(
					"employeeId" => $manager,
					"names" => $names,
					"location" => $location,
					"description" => $desc,
					"status" => $status,
					"created_by" => $this->session->get("shop_id"),
				));
			} else {
				$bMdl->save(array(
					"id" => $id,
					"employeeId" => $manager,
					"names" => $names,
					"location" => $location,
					"description" => $desc,
					"status" => $status,
				));
			}

			echo '{"success":"Saved"}';
		} catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getProduct($id = null){
		$Mdl = new ProduitModel();
		$builder = $Mdl->select("products.*")
		->where('products.id', $id);
		try {
			$data = $builder->get()->getRowArray();
			echo json_encode($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getBranche($id = null){
		$Mdl = new BrancheModel();
		$builder = $Mdl->select("branche.*")
		->where('branche.id', $id);
		try {
			$data = $builder->get()->getRowArray();
			echo json_encode($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getUser($id = null){
		$Mdl = new UserModel();
		$builder = $Mdl->select("users.*")
		->where('users.id', $id);
		try {
			$data = $builder->get()->getRowArray();
			echo json_encode($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getArchive($id){
		$mdl = new BrancheProduct();
		$builder = $mdl->select("brancheproduct.infoId,brancheproduct.productId as proId,brancheproduct.sellingprice as price
				,brancheproduct.quantity as qty,st.names as produit")
				->join("products st", "brancheproduct.productId=st.id")
				->where("brancheproduct.infoId", $id);
		try {
			$data = $builder->get()->getResultArray();
			return $this->response->setJSON($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getClientData($id =null){
		$Mdl = new ClientModel();
		$builder = $Mdl->select("clients.*")
		->where('clients.id', $id);
		try {
			$data = $builder->get()->getRowArray();
			echo json_encode($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getInfo($id = null){
		$dl =  new BrancheProduct();
		$builder = $dl->select("brancheproduct.sellingprice,brancheproduct.usedQuantity,brancheproduct.quantity,brancheproduct.productId")
			->where('brancheproduct.id',$id);
			try {
				$data = $builder->get()->getRowArray();
				echo json_encode($data);
			} catch (\ErrorException $e) {
				echo '{"error":' . $e->getMessage() . '}';
			}
	}
	public function sellings(){
		$this->_preset();
		$data = array();
		$pMdl = new BrancheinfoModel();
		$mdl = new BrancheModel();
		$Mdls = new BrancheProduct();
		$cmdl = new ClientModel();
		$data['branches'] = $mdl->select('*')->where('id',$this->session->get('branche_id'))->get()->getRowArray();
		$data['clients'] = $cmdl->select("*")->where('brancheId',$this->session->get('branche_id'))->orderBy('id','DESC')->get()->getResultArray();
		$data['products'] = $Mdls->select("brancheproduct.*,in.brancheId,st.names as produit")
				->join("brancheproductinfo in","brancheproduct.infoId=in.id")
				->join("products st", "brancheproduct.productId=st.id")
				->where("in.brancheId", $this->session->get('branche_id'))
				->orderBy('brancheproduct.id','DESC')
				->get()->getResultArray();
		$data['title']='Selling';
		// $data['content']=view("sellings",$data);
		return view('sellings',$data);
	}
	public function manipulate_client(){
		$id= $this->request->getPost('clientId');
		$names = $this->request->getPost('names');
		$address = $this->request->getPost('location');
		$mail  = $this->request->getPost('mail');
		$phone = $this->request->getPost('phone');
		$mdl = new ClientModel();
		 try {
			if ($id == "") {
				$mdl->save(array(
					'names' => $names,
					'address' => $address,
					'email' => $mail,
					'phone' => $phone,
					'createdBy' => $this->session->get('shop_id'),
					'brancheId' => $this->session->get('branche_id'),

				));
				echo '{"success":"Saved"}';
			}
			else{
				$mdl->save(array(
					'id' =>$id,
					'names' => $names,
					'address' => $address,
					'email' => $mail,
					'phone' => $phone

				));
				echo '{"success":"updated"}';
			}
			} catch (\ErrorException $e) {
				echo '{"error":' . $e->getMessage() . '}';
			}
	}
	public function manipulate_branche_items(){
		$iModel = new InvoiceModel();
		$sModel = new SellingModel();
		$pModel = new BrancheProduct();
		$clientId='1';
		$invoice = $this->request->getPost("invoiceId");
		$client = $this->request->getPost("clientId");
		$product = $this->request->getPost("itemId");
		$qty = $this->request->getPost("quantity");
		$reduction = $this->request->getPost("sellprice");
		$productInfo = $pModel->select("lastprice")->where("id", $product)->get()->getRowArray();
		$amount = $productInfo['lastprice'];
		$invoiceTbl = 0;
		$checker = $pModel->select("quantity,usedQuantity")->where("id", $product)->get()->getRowArray();
		if (($checker['quantity'] - $checker['usedQuantity']) - $qty < 0) {
			return $this->response->setJSON(array("error" => "Sorry ! The available quantity is " . ($checker['quantity'] - $checker['usedQuantity']) . " only."));
		}
		if($checker['usedQuantity']>=0){
			$useq=$checker['usedQuantity']+$qty;
			$id=$product;
			$info = array(
				"usedQuantity" => $useq);
			$pModel->update($id,$info);
		}
		$disponible = $checker['quantity']-$checker['usedQuantity']-$qty;
		if(!$client==''){
			$clientId=$client;
		}
		if($reduction < $amount){
			return $this->response->setJSON(array("error"=>"Le prix de vente ne doit pas depasser ".$amount));
		}
		else{
		try {
			if ($invoice == '') {
				$information = array(
					"clientId" => $clientId,
					"createdBy" => $this->session->get("shop_id"),
					"brancheId" => $this->session->get("branche_id"),
					"status" => 0);
				$invoice_id = $iModel->insert($information);
				$records = array(
					"invoiceId" => $invoice_id,
					"productId" => $product,
					"quantity" => $qty,
					"unitprice" => $reduction,
					"status" => 0);
				$sModel->save($records);
				$invoiceTbl = $sModel->select("infoinvoices.id as ids,infoinvoices.quantity as qty,infoinvoices.productId as prodId,infoinvoices.invoiceId,infoinvoices.unitprice as unit,st.productId,st.sellingprice as price,p.names as produit")
				->join("brancheproduct st", "infoinvoices.productId=st.id")
				->join("products p","st.productId=p.id")
				->where("infoinvoices.invoiceId", $invoice_id)->get()->getResult();
				return $this->response->setJSON(array("success" => "Added","disponible"=>$disponible, "client"=>$clientId, "invoice" => $invoice_id, "records" => $invoiceTbl));
			}
			 else {
				$records = array(
					"invoiceId" => $invoice,
					"productId" => $product,
					"quantity" => $qty,
					"unitprice" => $reduction,
					"status" => 0);
				$sModel->save($records);
				$invoiceTbl = $sModel->select("infoinvoices.id as ids,infoinvoices.quantity as qty,infoinvoices.productId as prodId,infoinvoices.unitprice as unit,infoinvoices.invoiceId,st.productId,st.sellingprice as price,p.names as produit")
				->join("brancheproduct st", "infoinvoices.productId=st.id")
				->join("products p","st.productId=p.id")
				->where("infoinvoices.invoiceId", $invoice)->get()->getResult();
				return $this->response->setJSON(array("success" => "Added", "disponible"=>$disponible, "client"=>$clientId, "records" => $invoiceTbl));
			}
		} catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	}
	public function saveInvoice(){
		$this->_preset();
		$productId = $this->request->getPost("productId[]");
		$qty = $this->request->getPost("quantity[]");
			echo '{"success":"Saved"}';
	}
	public function removeInvoiceItem($id = null){
		$Mdl = new SellingModel();
		$pModel = new BrancheProduct();
		$information = $Mdl->select("infoinvoices.quantity as qty,infoinvoices.productId,st.usedQuantity,st.quantity as avq")
		->join("brancheproduct st", "infoinvoices.productId=st.id")
		->where("infoinvoices.id",$id)
		->get()->getRowArray();
			$product=$information['productId'];
			$disponible=$information['avq']+$information['qty']-$information['usedQuantity'];
			$info = array(
				"usedQuantity" => $information['usedQuantity']-$information['qty']);
			$data = array("id" => $id);
		try {
			$pModel->update($product,$info);
			$Mdl->delete($data);
			echo '{"success":"Deleted","prodId":"'.$product.'","disponible":"'.$disponible.'"}';
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function removeInvoice($id){
		$MdlE= new SellingModel();
		$iMdl= new InvoiceModel();
		$sMdl = new BrancheProduct();
		$information = $MdlE->select("infoinvoices.quantity as qty,infoinvoices.productId,st.usedQuantity")
		->join("brancheproduct st", "infoinvoices.productId=st.id")
		->where("infoinvoices.id",$id)->get()->getResultarray();
		foreach($information as $item){
			$ids=$item['productId'];
			$info = array(
				"usedQuantity" => $item['usedQuantity']-$item['qty']);
			$sMdl->update($ids,$info);
		}
		echo json_encode($information);
		$data = array("infoinvoices.invoiceId" => $id);
		$invoice = array("id"=>$id);
		try {
			$MdlE->delete($data);
			$iMdl->delete($invoice);
			echo '{"success":"Facure supprimée avec success"}';
		} catch (\Exception $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}

	}
	public function invoicearchive($client = null){
		$mdl = new InvoiceModel();
		$data['invoice'] = $mdl->select("invoices.*,us.names, us.address,us.phone,us.email")
				->join("clients us", "invoices.clientID=us.id")
				->where("invoices.clientId", $client)
				->get()->getResultarray();
		$data['title']="Facutres client";
		$data['content'] = view('clientInvoices',$data);
		return view('base',$data);
	}
	public function branchereport(){
		$this->_preset();
		$data = array();
		$mdl = new BrancheModel();
		$data['branche'] = $mdl->select("id,names")->get()->getResultarray();
		$data['title']='Rapport';
		$data['content'] = view('branchereport',$data);
		return view('base',$data);
	}
	public function generalreport(){
		$this->_preset();
		$data = array();
		$data['title']='Rapport';
		$data['content'] = view('generalreport',$data);
		return view('base',$data);
	}
	public function branchegeneralreport(){
		$this->_preset();
		$data = array();
		$mdl = new BrancheModel();
		$data['branche'] = $mdl->select("*")->where("id",$this->session->get("branche_id"))->get()->getRowArray();
		$data['title']='Rapport';
		$data['content'] = view('branchegeneralproduct',$data);
		return view('base',$data);
	}
	public function productreport(){
		$this->_preset();
		$data = array();
		$mdl = new ProduitModel();
		$data['product'] = $mdl->select("id,names")->get()->getResultarray();
		$data['title']='Rapport';
		$data['content'] = view("productreport",$data);
		return view('base',$data);
	}
	public function brancheproductreport(){
		$this->_preset();
		$data = array();
		$mdlp = new ProduitModel();
		$mdl = new BrancheModel();
		$data['branche'] = $mdl->select("id,names")->get()->getResultarray();
		$data['product'] = $mdlp->select("id,names")->get()->getResultarray();
		$data['title']='Rapport';
		$data['content'] = view('brancheproductreport',$data);
		return view('base',$data);
	}
	public function generalReportForm(){
		$mMdl= new InvoiceModel();
		$fromDate = $this->request->getPost("fromDate");
		$untilDate = $this->request->getPost("untilDate");
		$data= $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,m.names as produit,m.categoryId,u.names as user,b.names as branche,c.names as category")
			->join("branche b","invoices.brancheId=b.id")
			->join("infoinvoices in","invoices.id=in.invoiceId")
			->join("users u","invoices.createdBy=u.id")
			->join("brancheproduct p","in.productId=p.id")
			->join("products m","p.productId=m.id")
			->join("category c","m.categoryId=c.id")
			->where("in.created_at >=", $fromDate)
			->where("in.created_at <=", $untilDate)
			->get()->getResultArray();
			if (count($data) == 0) {
				echo '{"error":"Aucune donnée disponible"}';
			} else {
				return $this->response->setJSON($data);
			}

	}
		public function brancheReportForm(){
			$mMdl= new InvoiceModel();
			$branche = $this->request->getPost("branche");
			$fromDate = $this->request->getPost("fromDate");
			$untilDate = $this->request->getPost("untilDate");
			$data= $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,m.names as produit,m.categoryId,u.names as user,b.names as branche,c.names as category")
				->join("branche b","invoices.brancheId=b.id")
				->join("infoinvoices in","invoices.id=in.invoiceId")
				->join("users u","invoices.createdBy=u.id")
				->join("brancheproduct p","in.productId=p.id")
				->join("products m","p.productId=m.id")
				->join("category c","m.categoryId=c.id")
				->where("b.id",$branche)
				->where("in.created_at >=", $fromDate)
				->where("in.created_at <=", $untilDate)
				->get()->getResultArray();
				if (count($data) == 0) {
					echo '{"error":"Aucune donnée disponible"}';
				} else {
					return $this->response->setJSON($data);
				}

		}
	public function brancheinfo($id=null){
		$mdl = new BrancheModel();
		$builder = $mdl->select("branche.*,u.names as user")
				->join("users u","branche.employeeId=u.id")
				->where("branche.id", $id);
		try {
			$data = $builder->get()->getRowArray();
			return $this->response->setJSON($data);
		} catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function getClientArchive($id = null){
		$mMdl= new InvoiceModel();
		$builder = $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,in.productId,m.names as produit")
			->join("infoinvoices in","invoices.id=in.invoiceId")
			->join("brancheproduct p","in.productId=p.id")
			->join("products m","p.productId=m.id")
			->where("invoices.id", $id);
		try {
			$data = $builder->get()->getResultArray();
			return $this->response->setJSON($data);
		}catch (\ErrorException $e) {
			echo '{"error":' . $e->getMessage() . '}';
		}
	}
	public function productreportFrom(){
		$mMdl= new InvoiceModel();
			$product = $this->request->getPost("product");
			$branche = $this->request->getPost("branche");
			$fromDate = $this->request->getPost("fromDate");
			$untilDate = $this->request->getPost("untilDate");
			$data= $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,m.names as produit,m.categoryId,u.names as user,b.names as branche,c.names as category")
				->join("branche b","invoices.brancheId=b.id")
				->join("infoinvoices in","invoices.id=in.invoiceId")
				->join("users u","invoices.createdBy=u.id")
				->join("brancheproduct p","in.productId=p.id")
				->join("products m","p.productId=m.id")
				->join("category c","m.categoryId=c.id")
				->where("b.id",$branche)
				->where("m.id",$product)
				->where("in.created_at >=", $fromDate)
				->where("in.created_at <=", $untilDate)
				->get()->getResultArray();
				if (count($data) == 0) {
					echo '{"error":"Aucune donnée disponible"}';
				} else {
					return $this->response->setJSON($data);
				}

	}
	public function brancheproduct(){
		$mMdl= new InvoiceModel();
			$product = $this->request->getPost("product");
			$branche = $this->request->getPost("branche");
			$fromDate = $this->request->getPost("fromDate");
			$untilDate = $this->request->getPost("untilDate");
			$data= $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,m.names as produit,m.categoryId,u.names as user,b.names as branche,c.names as category")
				->join("branche b","invoices.brancheId=b.id")
				->join("infoinvoices in","invoices.id=in.invoiceId")
				->join("users u","invoices.createdBy=u.id")
				->join("brancheproduct p","in.productId=p.id")
				->join("products m","p.productId=m.id")
				->join("category c","m.categoryId=c.id")
				->where("m.id",$product)
				->where("in.created_at >=", $fromDate)
				->where("in.created_at <=", $untilDate)
				->get()->getResultArray();
				if (count($data) == 0) {
					echo '{"error":"Aucune donnée disponible"}';
				} else {
					return $this->response->setJSON($data);
				}

	}
	public function brancheGeneralForm(){
		$mMdl= new InvoiceModel();
		$fromDate = $this->request->getPost("fromDate");
		$untilDate = $this->request->getPost("untilDate");
		$data= $mMdl->select("invoices.*,in.quantity as qty,in.unitprice,in.created_at,p.productId,m.names as produit,m.categoryId,u.names as user,b.names as branche,c.names as category")
			->join("branche b","invoices.brancheId=b.id")
			->join("infoinvoices in","invoices.id=in.invoiceId")
			->join("users u","invoices.createdBy=u.id")
			->join("brancheproduct p","in.productId=p.id")
			->join("products m","p.productId=m.id")
			->join("category c","m.categoryId=c.id")
			->where("b.id",$this->session->get("branche_id"))
			->where("in.created_at >=", $fromDate)
			->where("in.created_at <=", $untilDate)
			->get()->getResultArray();
			if (count($data) == 0) {
				echo '{"error":"Aucune donnée disponible"}';
			} else {
				return $this->response->setJSON($data);
			}
	}
}
