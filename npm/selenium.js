const {Builder, By, Key, until} = require('selenium-webdriver');

const firefox = require('selenium-webdriver/firefox');
const serviceBuilder = new firefox.ServiceBuilder("./node_modules/geckodriver.exe");

const options = new firefox.Options();
options.headless();

class Browser{
	constructor(){
		
	}
	async loadURL(url){
		if(!this.driver)
			this.driver = await new Builder()
			.forBrowser('firefox')
			.setFirefoxOptions(options)
			.setFirefoxService(serviceBuilder)
			.build();
		await this.driver.get(url);
	}
	async close(){
		await this.driver.quit();
	}
	async querySelector(selector){
		return await this.driver.findElement(By.css(selector))
	}
	async screenShot(){
		return await this.driver.takeScreenshot()
	}
}
function open(url){
	return new Promise((resolve)=>{
		var b = new Browser()
		b.loadURL(url).then(x=>{
			resolve(b)
		})
	})

}
module.exports = {
	Browser,
	open
}