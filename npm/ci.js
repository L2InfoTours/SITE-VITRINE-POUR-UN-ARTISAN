const symfony = require('./symfony')
const config = require("../CI.json")
class Config{
	constructor(config){
		if(config.url){

		}else{
			this.host = config.host||"127.0.0.1"
			this.port = config.port||"8000"
			this.protocol = config.protocol || "http"
		}
	}
	generateURL(){
		return this.url||`${this.protocol}://${this.host}:${this.port}`
	}
}
class ConfigPage{
	constructor(obj){
		this.url = obj.url || "/"
		this.method = (obj.method || "GET").toUpperCase()
	}
}

function testPage(page){
	try{

	}catch{
		console.error(`test fail`)
	}
	console.info(`test passed`)
}
function testWebSitePages(config){
	(config.pages||[]).forEach(page=>{
		testPage(new ConfigPage(page))
	})
}
function testWebSite(config){
	config = new Config(config)
	testWebSitePages(config)
}
symfony.start()
config.url = symfony.url()
testWebSite(config)