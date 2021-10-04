const exec = require('./cmd')

function reloadSymfony(){
	var str = exec("symfony server:stop")
	var list = exec("symfony server:list")
	if(/[0-9]/.test(list)){
		str = exec("symfony server:stop")
		list = exec("symfony server:list")
	}
	startSymfony(false)
}
function startSymfony(force = false){
	var str = exec("symfony server:start -d")
	if(str.search('web server is already running')>0){
		console.info("Server is Already Running")
		if(force){
			console.info("we try to force reload")
			reloadSymfony()
		}
	}else if(str.search("WARNING")){
		console.error(str)
	}else{
		console.info("Server is Running")
	}
}
function getURL(){
	var str = exec("symfony open:local")
	return str.split(": ")[1]
}
/**
 * php bin/console make:migration
 * 
 */
module.exports = {
	start:startSymfony,
	reload:reloadSymfony,
	url:getURL,
}