<?php

//Einbinden von Controllers
include_once 'controller/UserController.php';
include_once 'controller/ShoppingCartController.php';
include_once 'controller/ProductController.php';
include_once 'controller/CustomerController.php';
include_once 'controller/OrderController.php';

//Session wird gestartet
session_start();

//op = operation, Server übergibt den wert von 'op', von allen Server Variablen($_POST,$_GET,usw.)
@$op = $_REQUEST['op'];

//pr = productnummer die vom Shop ausgewählt wird, -1 weil Index bei 0 anfängt
@$pr = $_REQUEST['pr'] -1;

//Controllers werden instanziert, damit wir ihre Funktionen im index brauchen können
$user_controller = new UserController();
$cart_controller = new ShoppingCartController();
$prod_controller = new ProductController();
$cust_controller = new CustomerController();
$order_controller = new orderController();

/*******************************
Anhand des Wertes von op, also der gesuchten Funktion im Index,
werden auf verschiedene Seiten gezeigt und /oder verschiedene Funktionen eines 
Controllers durchgeführt. z.B versucht der User einzuloggen wird im Forumular
über $_POST login button (mit name "op"!)die login Funktion des Indexes
aufgerufen. Ist die Authentifizierung erfolgreich wird der User auf den Shop
(ShopView.php) verlinkt. 
Alle Verlinkungen verlaufen durch den Index.
******************************/
switch($op){
	
	//verweist einen leeren op an die Loginseite (erste Ladung des Shops)
	
	case "":
		header("Location:./view/LoginView.php");
	break;
	
	
	//basic login logout operations
	
	case 'Login':
		//session Variablen
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		//prüft ob der user existiert und ob das password stimmt
		if($user_controller->login($username, $password)){
			if($user_controller->checkAdmin($username)){
				// admin view
				header("Location:view/AdminView.php");
			}else{
	
				//normaler User link zum Shop
				header("Location:view/ShopView.php");
			}	
		}else {
			/*wenn der Username oder das Passwort nicht stimmt wird der User
				züruck an die Loginseite verwiesen mit einer Error Meldung*/
			header("Location:./view/LoginView.php?err=37");		
		}	
	break;

	case 'BacktoLogin':
		header("Location:./view/LoginView.php");
	break;
	
	case 'BacktoShop':
		header("Location:./view/ShopView.php");
	break;


	// register
	case 'Register':
		header("Location:./view/RegisterView.php");
	break;
	
	//Next - customer Daten eingeben 
	case 'Next':
		$_SESSION['username'] = $_POST['username'];
		//prüft ob der User erfolgreich in die Text Datei gespeichert wurde
		if($user_controller->registerUser()){
		header("Location:./view/CustomerView.php");		
		}else{
		/*wenn die Passwörter nicht identisch sind wird der User
		zurück an die RegisterView geschickt und eine Error Meldung wird ausgegeben*/
		header("Location:./view/RegisterView.php?err=12");
		}
	break;
	
	//Send
	case 'Send':
		//prüft ob die Customer Daten erfolgreich gespeichert wurden
		if($cust_controller->registerCustomer()){
		header("Location:./view/LoginView.php");		
		}else{
		header("Location:./view/RegisterView.php?err=13");
		}
	break;


	//logout
	case 'logout':
		$user_controller->logout();
		header("Location:view/LoginView.php");
	break;


	// admin operations
	
	case 'show-Userlist':
		header("Location:view/UserListView.php");
	break;
	
	case 'show-Customers':	
		header("Location:view/CustomerListView.php");
	break;
	
	case 'show-Orders':		
		header("Location:view/OrderView.php");
	break;

	case 'Back':
		header("Location:view/AdminView.php");
	break;
	
	
	// cart operations
	
	case 'add-Item':
		//dem Warenkorb wird ein Produkt anhand pr (gewählter Produktnummer) hinzugefügt
		$cart_controller->addItem($_SESSION['username'], $prod_controller->listProduct($pr));
		//danach wird die Seite neu geladen
		header("Location:view/ShopView.php");
	break;

	case 'view-Item':
		header("Location:view/CartView.php");
	break;
		
	case 'Order':
		//eine Bestellung wird erstellt
		if($order_controller->createOrder()){
		//falls erfolgreich soll der User ausgeloggt werden
		$user_controller->logout();
		header("Location:view/LoginView.php");
		}
	break;	
	
	//default - 
	//falls der User selber bei op= etwas eingibt soll er ausgeloggt werden
	default:
		$user_controller->logout();
		header("Location:view/LoginView.php");
	break;
		
}

?>
