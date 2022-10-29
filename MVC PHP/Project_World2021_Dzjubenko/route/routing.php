<!-- <?php
	/*URI унифицированный идентификатор ресурса, 
		который был предоставлен для доступа к странице
	знак ? отделяет полный путь и значение 
		переменной идентификатора для фильтрации
	*/
	$host = explode('?', $_SERVER['REQUEST_URI']);
	//полный путь к проекту до знака ?
	$path=$host[0];
		//количество папок вложений - считаем символы "/"
		$num = substr_count($path, '/');
		//вычисляем маршрут после последнего символа "/"
		$route = explode('/', $path)[$num];
	//значение переменной - идентификатора фильтрации - после знака ?
	if(strstr($_SERVER['REQUEST_URI'],'?')){//если найден символ '?'
		$id=urldecode($host[1]);//прочитаем значение из адресной строки и уберем пробелы
	}
	if(isset($_SESSION['role'])){
		if($route=='profile'){
			ControllerAdmin::FormProfile();
		}
		elseif($route=='profileEditResult') {
			ControllerAdmin::profileEditResult();
		}
	}
	//-----------------------
	if ($route == '' OR $route == 'index.php'){
		Controller::StartSite();
	}
	elseif ($route=='states'){
		Controller::StateList();
	}
	elseif ( $route == 'citiesState'){
		if(isset($id)){
			Controller::CityListByState($id);
		}else{
			Controller::error404();
		}
	}elseif ( $route == 'cities'){
		Controller::CityList();
	}
	elseif ( $route == 'continent'){
		Controller::ContinentStateList();
	}
	elseif( $route == 'countriesContinent'){
		if(isset($id)){
			Controller::StateByContinent($id);
		}else{
			Controller::error404();
		}
	}elseif( $route == 'citiesStateContinent'){
		if(isset($id)){
			Controller::CityListByStateContinent($id);
		}else{
			Controller::error404();
		}
	}
	elseif($route == 'search'){
		if(isset($_GET['text'])){
			Controller::SearchByCode($_GET['text']);
		}else{
			Controller::error404();
		}
	}
	elseif ($route == 'login'){
		ControllerAdmin::FormLogin();
	}
	elseif ($route == 'loginResult'){
		ControllerAdmin::LoginAction();
	}
	elseif ($route == 'logout'){
		ControllerAdmin::LogoutAction();
	}
	elseif(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		if($route == 'countrylist') {
			ControllerCountry::CountryList();
		}
		elseif($route == 'citylist') {
			ControllerCity::CityList();
		}
		elseif($route == 'addcountry'){
			ControllerCountry::CountryAddForm();
		}
		elseif($route == 'addcity') {
			ControllerCity::CityAddForm();
		}
		elseif($route == 'addresult'){
			ControllerCountry::CountryAddResult();
		}
		elseif($route == 'addCityresult'){
			ControllerCity::CityAddResult();
		}
		elseif( $route == 'editcountry'){
			if(isset($id)) {
				ControllerCountry::CountryEditForm($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'editcity'){
			if(isset($id)) {
				ControllerCity::CityEditForm($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'deletecity'){
			if(isset($id)) {
				ControllerCity::CityDeleteForm($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'editresult') {
			if(isset($id)) {
				
				ControllerCountry::CountryEditResult($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'editCityResult') {
			
			if(isset($id)) {
				ControllerCity::CityEditResult($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'deletecountry') {
			if(isset($id)) {
				ControllerCountry::CountryDeleteForm($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'deleteresult'){
			if(isset($id)) {
				ControllerCountry::CountryDeleteResult($id);
			}else{
				Controller::error404();
			}
		}
		elseif( $route == 'deleteCityresult'){
			if(isset($id)) {
				ControllerCity::CityDeleteResult($id);
			}else{
				Controller::error404();
			}
		}
	}
	elseif($route=='profile'){
	}
	elseif($route=='profileEditResult') {
	}
	else{
		Controller::error404();
	}
?> 