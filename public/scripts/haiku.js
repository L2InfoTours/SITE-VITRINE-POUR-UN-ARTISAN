HTMLElement.prototype[Symbol.toString] = function(){
	return this.outerHTML
}

class Haiku extends Function{
	constructor(element){
		super("selector",`return document.querySelector(selector)`)
		this.element = element
	}
	create(tagName="div",innerHTML="",optn={}){
		var element = document.createElement(tagName)
		element.innerHTML = innerHTML

		Object.keys(optn).forEach(key=>{
			var value = optn[key]
			if(value)
				element.setAttribute(key,value)
		})
//= element[Symbol.toStringTag] 
		// element.toString = element[Symbol.toString] = function(){
		// 	console.log("str")
		// 	return this.outerHTML
		// }
		element[Symbol.toPrimitive] = function(hind){
			if(typeof hind == "string"){
				return this.outerHTML
			}
			return this
		}
		return element
	}
	createURL(optn = {}){
		var opt = {}

		opt.protocol = optn.protocol||location.protocol
		opt.hostname = optn.hostname||location.hostname
		if(opt.hostname == location.hostname){
			opt.port = location.port
			if(! opt.port.startsWith(':'))opt.port = `:${opt.port}`
		}else{
			opt.port = optn.port||""
		}
		opt.pathname = optn.pathname||location.pathname
		opt.body = optn.body||null
		
		var body = ""

		if(opt.protocol.endsWith(':'))opt.protocol.slice(0,-1)
		if(opt.pathname.startsWith('/'))opt.pathname.slice(1)
		
		if(opt.body){
			body += "?"
			Object.keys(opt.body).forEach((key,n)=>{
				var value = opt.body[key]
				key = encodeURI(key)
				value = encodeURI(value)
				if(value){
					body += `${(n!=0?'&':"")}${key}=${value}`
				}
			})
		}
		if(! /file/.test(opt.protocol)){
			return `${opt.protocol}://${opt.hostname}${opt.port}/${opt.pathname}${body}`
		}else{
			return `file:://${opt.port}${opt.pathname}`
		}
	}
	createLink(text,url="#",optn = {}){
		var opt = Object.assign({},optn)
		opt.href = url
		opt.target = opt.target||(optn.newtab?"_blank":null)
		return this.create("a",text,opt)
	}
	get network(){
		var obh = {
			twitter:{
				protocol:"https",
				hostname:"twitter.com",
				pathname:"share",
				body:{
					url:this.createURL(),
					text:(this("meta[name=description]")?.getAttribute("content")||this("main")?.textContent||document.body.textContent||"... No CONTENT").trim(),
					via:"username",
				},
				set username(username){
					this.body.via = username
				},
				background: "#55ACEE",
				color: "white",
			},
			facebook:{
				protocol:"https",
				hostname:"facebook.com",
				pathname:"sharer/sharer.php",
				body:{
					u:this.createURL(),
				},
				background: "#3B5998",
				color: "white",
			},
			linkedin:{
				protocol:"https",
				hostname:"linkedin.com",
				pathname:"shareArticle",
				body:{
					url:this.createURL(),
					source:this.createURL(),
					title:(this("meta[name=title]")?.getAttribute("content")||this("title")?.textContent||"... No TITLE").trim(),
					summary:(this("meta[name=description]")?.getAttribute("content")||this("main")?.textContent||document.body.textContent||"... No CONTENT").trim(),
				},
				
				background: "#007bb5",
				color: "white",
			},
		}
		obh.share = ()=>{
			var networks = []
			Object.keys(this.network).forEach(key=>{
				
				if(typeof this.network[key] == "object"){
					var a = this.createLink("",this.createURL(this.network[key]),{
						class:`icon network fa fa-${key}`,
					})
					a.style = `margin: 10px;padding: 5px;border-radius: 50%;background: ${this.network[key].background};color: ${this.network[key].color};width: 1.5em;height: 1.5em;text-align: center;`
					networks.push(a)
				}else{
					console.log(key,this.network[key])
				}
			})
			document.write(networks.join(''))
			// this.element.appendChild(...networks)
		}
		return obh
	}
}
$ = haiku = new Haiku