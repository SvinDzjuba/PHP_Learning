<?php
/*URI унифицированный идентификатор ресурса, 
 который был предоставлен для доступа к странице
 знак ? отделяет полный путь и значение 
 переменной идентификатора для фильтрации
 */
$host = explode('?', $_SERVER['REQUEST_URI']);
// полный путь к проекту до знака ?
$path = $host[0];
// количество папок вложений - считаем символы "/"
$num = substr_count($path, '/');
// вычисляем маршрут после последнего символа "/"
$route = explode('/', $path)[$num];
// значение переменной - идентификатора фильтрации - после знака ?
if (strstr($_SERVER['REQUEST_URI'], '?')) { //если найден символ '?'
	$id = urldecode($host[1]); //прочитаем значение из адресной строки и уберем пробелы
}

//-----------------------

if ($route == '' or $route == 'index.php') {
	Controller::StartSite();
}
elseif ($route == 'states') {
	Controller::StateList();	
}
elseif ($route == 'citiesState') {
	if(isset($id)) {
		Controller::citiesListByState($id);
	} else {
		Controller::error404();
	}
}
elseif ($route == 'citiesStateContinent') {
	if(isset($id)) {
		Controller::citiesListByStateContinent($id);
	} else {
		Controller::error404();
	}
}
elseif ($route == 'cities') {
	Controller::CitiesList();
}
elseif ($route == 'continent') {
	Controller::statesAllContinents();
}
elseif ($route == 'continentStates') {
	if(isset($id)) {
		Controller::statesByContinent($id);
	} else {
		Controller::error404();
	}
}
elseif ($route == 'countryList') {
	ControllerCountry::CountryList();
}
elseif($route == 'add-country') {
	ControllerCountry::CountryAddForm();
}
elseif($route == 'add-result') {
	ControllerCountry::CountryAddResult() ;
}
elseif($route == 'edit-country') {
	if(isset($id)) {
		ControllerCountry::CountryEditForm($id);
	} else {
		Controller::error404();
	}
}
elseif($route == 'edit-result') {
	if(isset($id)) {
		ControllerCountry::CountryEditResult($id);
	} else {
		Controller::error404();
	}
}
elseif($route == 'delete-country') {
	if(isset($id)) {
		ControllerCountry::CountryDeleteForm($id);
	} else {
		Controller::error404();
	}
}
elseif($route == 'delete-result') {
	if(isset($id)) {
		ControllerCountry::CountryDeleteResult($id);
	} else {
		Controller::error404();
	}
}

// Search
elseif ($route == 'search') {
	if(isset($_GET['text'])) {
		Controller::SearchByCode($_GET['text']);
	} else {
		Controller::error404();
	}
}
// Page not found
else {
	Controller::error404();
}
?>