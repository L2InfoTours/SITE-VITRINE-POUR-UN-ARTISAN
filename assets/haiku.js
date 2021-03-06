import './styles/haiku.css';

class HaikuElement extends HTMLElement{
	constructor(){
		super()
		this.attachShadow({mode: 'open'})
	}
}

class SwitchNightMode extends HaikuElement{
	static style = `
	.nightmode{
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		  /** sunny side **/
		  --blue-background: #C2E9F6;
		  --blue-border: #72cce3;
		  --blue-color: #96dcee;
		  --yellow-background: #fffaa8;
		  --yellow-border: #f5eb71;
		  /** dark side **/
		  --indigo-background: #348;
		  --indigo-border: #5d6baa;
		  --indigo-color: #6b7abb;
		  --gray-border: #e8e8ea;
		  --gray-dots: #e8e8ea;
		  /** general **/
		  --white: #fff;
		  width:3em;
		  height:2em;
		  background: var(--blue-color);
		  border-radius: 2em;
		  border: 1px solid var(--blue-border);
		  transition: all 0.6s ease;
		  overflow:hidden;
	  }
	  .nightmode input[type="checkbox"] {
		display: none;
	  }
	  .nightmode input[type="checkbox"] ~ label{
		width: 3em;
		height: 2em;
		display:block;
		border-radius: 1em;
		position: relative;
		background: var(--blue-color);
	  }
	  
	  .nightmode input[type="checkbox"] ~ label span {
		animation-name: reverse;
		animation-duration: 350ms;
		animation-fill-mode: forwards;
		transition: all 350ms ease-in;
		content: "";
		width: 1.7em;
		height: 1.7em;
		left: .1em;
		top: .1em;
		z-index:1;
		position: absolute;
		border-radius: 2em;
		background: var(--blue-color);
		box-shadow: inset 2em 0px 0px 2px var(--yellow-background);
	  }
	  .nightmode input[type="checkbox"] ~ label span:before,
	  .nightmode input[type="checkbox"] ~ label span:after
	  {
		  display:block;
		  position:relative;
		  border-radius:2px;
		  
		  height:3px;
		  content:"";
		  
		  background:var(--white);
		  
		  transition:all .6s ease;
	  }
	  .nightmode input[type="checkbox"] ~ label span:before{
		  top:45%;
		  left:120%;
		  width:.7em;
	  }
	  .nightmode input[type="checkbox"] ~ label span:after{
		  top:55%;
		  left:100%;
		  width:1em;
	  }
	  
	  .nightmode input[type="checkbox"]:checked ~ label {
		background: var(--indigo-background);
	  }
	  
	  .nightmode input[type="checkbox"]:checked + label span {
		animation-name: switch;
		animation-duration: 350ms;
		animation-fill-mode: forwards;
		transition: all 350ms ease-in;
		background: var(--indigo-background);
		box-shadow:inset -.5em 0px 0px 2px var(--gray-dots);
	  }
	  .nightmode input[type="checkbox"]:checked ~ label span:before{
		  top:23%;
		  left:-10%;
		  width:3px;
		  background:var(--yellow-background);
	  }
	  .nightmode input[type="checkbox"]:checked ~ label span:after{
		  top:35%;
		  left:-30%;
		  width:3px;
		  background:var(--yellow-border);
	  }
	  @keyframes switch {
		0% {
		  left: .1em;
		}
		60% {
		  left: .1em;
		  width: 2.7em;
		}
		100% {
		  left: 1.1em;
		  width: 1.7em;
		}
	  }
	  @keyframes reverse {
		0% {
		  left: 1.1em;
		  width: 1.7em;
		}
		60% {
		  left: .1em;
		  width: 2.7em;
		}
		100% {
		  left: .1em;
		}
	  }
	  `
	constructor(){
		super()
		var style = document.createElement('style')
		style.innerHTML = SwitchNightMode.style
		this.shadowRoot.innerHTML = `<div class="nightmode"><input id="night-toggle" value="false" onchange="document.body.parentElement.classList.toggle('night');localStorage.setItem('nightmode',localStorage.getItem('nightmode')=='false')" type="checkbox"><label for="night-toggle"><span></span></label></div>`
		if(localStorage.getItem("nightmode")=="true"||localStorage.getItem("nightmode")==null){
			// document.body.classList.add("night")
			document.body.parentElement.classList.add("night")
			console.log(document.body.parentElement)
			this.shadowRoot.querySelector('input').checked = true
		}
		this.shadowRoot.appendChild(style)

	}


}

window.customElements.define("switch-mode-night",SwitchNightMode)

class NavBarToggle extends HaikuElement{
	static style = `
	input {
		display:none;
	}
	input ~ div{
		width: 100%;
		height: 100%;
		margin: auto;
	}
	input ~ div span{
		display:block;
		height:2px;
		border-radius:2px;
		width:100%;
		background:#eee;
		position:relative;
		transition:transform .6s ease,width .6s ease,top .6s ease;
		left:50%;
		transform: translate(-50%,-2.5px);
	}
	input ~ div span:nth-child(1){
		top: 25%;
	}
	input ~ div span:nth-child(2){
		top: 50%;
	}
	input ~ div span:nth-child(3){
		top: 75%;
	}
	input:checked ~ div span:nth-child(1) {
	  transform: translate(-50%,2px) rotate(45deg);
	  top: 50%;
	}
	input:checked ~ div span:nth-child(2) {
	  width:0;
	}
	input:checked ~ div span:nth-child(3) {
	  transform: translate(-50%,-2px) rotate(-45deg);
	  top: 50%;
	}
	`
	constructor(){
		super()
		var input = document.createElement('input')
		input.type = "checkbox"

		var div = document.createElement('div')
		var span1 = document.createElement('span')
		var span2 = document.createElement('span')
		var span3 = document.createElement('span')
		var style = document.createElement('style')
		style.innerHTML = NavBarToggle.style
		this.shadowRoot.appendChild(style)

		this.shadowRoot.appendChild(input)
		this.shadowRoot.appendChild(div)

		div.appendChild(span1)
		div.appendChild(span2)
		div.appendChild(span3)

		this.addEventListener('click',()=>{
			input.checked = !input.checked
			this.switchMenu(input.checked)
		})
	}
	switchMenu(value){
		var menu = this.getAttribute('menu')
		var v = "open"
		var cls = document.getElementById(menu)
		cls.style.display = ""
		value?cls.classList.add(v):cls.classList.remove(v)
	}
}

window.customElements.define("navbar-toggle",NavBarToggle)

class TipBox extends HaikuElement{
	static style = `
	.tip-box-content{
		position: absolute;
		background: #222;
		border: #eee 2px solid;
		padding: 10px;
		border-radius: 10px;
		flex-direction: column;
		transform:translate(-100%,2em);
	}
	.row{
		display:flex;
		flex-direction: row;
	}
	.col{
		display:flex;
		flex-direction: column;
	}
	.tip-box-content::after{

	}
	`
	root = document.createElement('div')
	constructor(){
		super()
		var input = document.createElement('input')
		input.type = "checkbox"
		input.style.display = "none"

		var style = document.createElement('style')
		style.innerHTML = TipBox.style
		this.shadowRoot.appendChild(style)

		var icon = document.createElement('div')
		icon.innerHTML = `
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 45.973 45.973" style="enable-background:new 0 0 45.973 45.973;" xml:space="preserve">
		<path xmlns="http://www.w3.org/2000/svg" d="M43.454,18.443h-2.437c-0.453-1.766-1.16-3.42-2.082-4.933l1.752-1.756c0.473-0.473,0.733-1.104,0.733-1.774    c0-0.669-0.262-1.301-0.733-1.773l-2.92-2.917c-0.947-0.948-2.602-0.947-3.545-0.001l-1.826,1.815    C30.9,6.232,29.296,5.56,27.529,5.128V2.52c0-1.383-1.105-2.52-2.488-2.52h-4.128c-1.383,0-2.471,1.137-2.471,2.52v2.607    c-1.766,0.431-3.38,1.104-4.878,1.977l-1.825-1.815c-0.946-0.948-2.602-0.947-3.551-0.001L5.27,8.205    C4.802,8.672,4.535,9.318,4.535,9.978c0,0.669,0.259,1.299,0.733,1.772l1.752,1.76c-0.921,1.513-1.629,3.167-2.081,4.933H2.501    C1.117,18.443,0,19.555,0,20.935v4.125c0,1.384,1.117,2.471,2.501,2.471h2.438c0.452,1.766,1.159,3.43,2.079,4.943l-1.752,1.763    c-0.474,0.473-0.734,1.106-0.734,1.776s0.261,1.303,0.734,1.776l2.92,2.919c0.474,0.473,1.103,0.733,1.772,0.733    s1.299-0.261,1.773-0.733l1.833-1.816c1.498,0.873,3.112,1.545,4.878,1.978v2.604c0,1.383,1.088,2.498,2.471,2.498h4.128    c1.383,0,2.488-1.115,2.488-2.498v-2.605c1.767-0.432,3.371-1.104,4.869-1.977l1.817,1.812c0.474,0.475,1.104,0.735,1.775,0.735    c0.67,0,1.301-0.261,1.774-0.733l2.92-2.917c0.473-0.472,0.732-1.103,0.734-1.772c0-0.67-0.262-1.299-0.734-1.773l-1.75-1.77    c0.92-1.514,1.627-3.179,2.08-4.943h2.438c1.383,0,2.52-1.087,2.52-2.471v-4.125C45.973,19.555,44.837,18.443,43.454,18.443z     M22.976,30.85c-4.378,0-7.928-3.517-7.928-7.852c0-4.338,3.55-7.85,7.928-7.85c4.379,0,7.931,3.512,7.931,7.85    C30.906,27.334,27.355,30.85,22.976,30.85z" fill="currentColor"/>
		</svg>`


		this.shadowRoot.appendChild(input)
		this.shadowRoot.appendChild(this.root)
		this.shadowRoot.appendChild(icon)
		this.root.classList.add('tip-box-content')
		this.root.style.display = "none"
		this.root.style.minWidth = "max-content"

		icon.addEventListener('click',()=>{
			input.checked = !input.checked
			this.switchTip(input.checked)
		})
		var childs = [...this.children]
		for(var child of childs){
			child.remove()
			this.root.appendChild(child)
		}
	}
	switchTip(value){
		this.root.style.display = value?"flex":"none"
	}
}
window.customElements.define("tip-box",TipBox)

class InputSearch extends HaikuElement{
	static style = `
		
.search {
    background:rgb(var(--dark));
    height: 40px;
    border-radius: 40px;
    padding-left: 10px;
	display: flex;
}

.search:hover > .input,.search input:focus {
	width: 240px;
	padding: 0 6px;
	color: rgb(var(--light));
}
.button {
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}

.input {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: rgb(var(--dark));
    font-size: 16px;
    line-height: 40px;
    width: 0px;
	transition: all 0.6s ease;
}

@media screen and (max-width: 620px) {
.search:hover > .input,.search input:focus{
    width: 150px;
    padding: 0 6px;
}
}
.search .input + svg.button{
  display: block;
  height: 40px;
  width: 40px;
  right: 0;
  top: 0;
  fill: none;
  stroke: rgb(var(--dark));
  stroke-width: 1.5px;
  stroke-dashoffset: 271.908;
  stroke-dasharray: 59 212.908;
  /* transform:rotate(0deg); */
  transition: all 0.6s ease;
  animation-play-state: paused;
}
.search:hover .input + svg.button,.search input:focus + svg.button{
  stroke-dasharray: 150 212.908;
  stroke-dashoffset: 300;
  stroke: rgb(var(--color));
  cursor:pointer;
  animation: rotate-button 2s linear infinite;
  animation-play-state: running;
}
@keyframes rotate-button {
  0% {
	  transform:rotate(0deg);
  }
  60% {
	  transform:rotate(180deg);
  }
  100% {
	  transform:rotate(360deg);
  }
}
	`
	constructor(){
		super()
		var style = document.createElement('style')
		style.innerHTML = InputSearch.style
		this.shadowRoot.appendChild(style)

		var div = document.createElement('div')
		div.classList.add('search')
		this.shadowRoot.appendChild(div)

		div.innerHTML = `
		<input class="input random-search" type="text" name="" onchange="searchFX(this.value)" placeholder="${this.getAttribute('placeholder')}">
		<svg class="button"><path d="m0-8c5 0 8 4 8 8c0 4-3 8-8 8c-5 0-8-4-8-8c0-4 3-8 8-8l0-9.1825c0-.4971 0-.8175 0-.8175a1 1 0 010 35a1 1 0 010-35" transform="translate(20,20) rotate(-225)"></path></svg>
		`
	}
}

window.customElements.define("input-search",InputSearch)

class ImageAspect extends HaikuElement{
	#img = null
	constructor(){
		super()
		this.style.width = this.getAttribute('width')
		this.style.height = this.getAttribute('height')
		var parent = document.createElement('div')
		parent.style = `width:100%;aspect-ratio:${this.getAttribute('aspect')||"16/9"};overflow:hidden;`
		var src = this.getAttribute('src')
		if(src){
			this.#img = new Image()
			this.#img.src = src
			this.#img.style = "object-fit:cover;width:100%;height:100%;"
			parent.appendChild(this.#img)
		}else{
			parent.innerHTML = `<svg style="cover;width:100%;height:100%;" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>`
		}
		this.shadowRoot.appendChild(parent)
		this.image = this.#img
	}
}

window.customElements.define("img-aspect",ImageAspect)

class ImageMap extends ImageAspect{
	constructor(){
		super()
		var img = this.shadowRoot.querySelector('img')
		var ctx = document.createElement('canvas').getContext('2d')
		
		var canvas = ctx.canvas
		canvas.style = img.style
		
		canvas.width = this.offsetWidth||window.innerWidth
		canvas.height = this.offsetHeight||window.innerHeight

		this.context = ctx
	}
	requestImage(){
		var img = new Image()
		img.src = `https://tile.openstreetmap.org/${z}/${x}/${y}.png`
	}
}

window.customElements.define("img-map",ImageMap)

class DragDropFile extends HaikuElement{
	#fileInput = document.createElement('input')
	#area = document.createElement('div')
	#value = null
	constructor(){
		super()
		if(this.hasAttribute('for')){
			var newfileInput = document.getElementById(this.getAttribute('for'))
			if(newfileInput)
				this.#fileInput = newfileInput
		}
		this.#fileInput.type = "file"
		this.shadowRoot.append(this.#area)
		this.#fileInput.addEventListener('change',(event)=>{
			this.#value = this.#fileInput.files[0]
			this.#change(event)
		})
		this.#area.addEventListener('click',()=>{
			this.#fileInput.click()
		})
		this.#area.style = "background:#333;border:#eee;width:100%;height:100%;min-width:3em;min-height:3em;"
		this.#area.innerHTML = "Click or Drop a File"
		this.#area.addEventListener('dragover',(e)=>{
			e.preventDefault()
			e.stopPropagation()
		})
		this.#area.addEventListener('drop',(e)=>{
			this.#value = e.dataTransfer.files[0]|| DragEvent.dataTransfer
			this.#change(e)
			e.preventDefault()
		})
	}
	#change(e){
		this.setAttribute("value", this.value.name)
		const dT = new DataTransfer()
		dT.items.add(this.#value)
		this.#area.innerHTML = this.#value.name
		console.log(this.hasAttribute('for'))
		if(this.hasAttribute('for')){
			var newfileInput = document.getElementById(this.getAttribute('for'))
			console.log(newfileInput,this.getAttribute('for'))
			if(newfileInput)
				this.#fileInput = newfileInput
		}
		
		this.#fileInput.files = dT.files
		this.dispatchEvent(new CustomEvent('change',e))
	}
	get value(){
		this.#value.url ||= this.#value.src||URL.createObjectURL(this.#value)
		return this.#value
	}
}
window.customElements.define("input-dragdrop",DragDropFile)

function UpdateTabber(){
	const tabcontrolers = document.querySelectorAll("[open-tab]")
	tabcontrolers.forEach(tabcontroler=>{
		tabcontroler.addEventListener('click',(ev)=>{
			location.assign(tabcontroler.getAttribute('open-tab'))
		})
	})
}
const filtred = document.querySelector("#filtred")
const filters = document.querySelectorAll("input.filter")
const filtererror = document.querySelector(".filter.error")

function doFilter(){
	var any = ! [...filters].some((o)=>o.checked)
	elements = filtred.querySelectorAll(".filter:not(.error)")
	var isempty = false;
	[...elements].map(filter=>{
		var clzzs = filter.classList
		clzzs = Object.values(clzzs)
		var mod = [...filters].reduce(
			(p,o)=>{
			if(o.checked)
				p.push(o.getAttribute("id"))
			return p
			},[]
		)
		var isgood = mod.some(x=>clzzs.includes(x))
		isgood||=any
		filter.style.display = isgood ?"flex":"none"
		isempty ||= isgood
	})
	filtererror.style.display = !isempty ?"flex":"none"
}
function UpdateFilter(){
	const filtersCategory = document.querySelectorAll("[type='filters-category']")
	console.log(filtersCategory)
	filtersCategory.forEach(element=>{
		var id = element.getAttribute('filterfor')
		element.classList.add('list-group')
		var caterories = element.querySelectorAll("[category]")
		const checkerboard = new Set()
		var filtering = document.getElementById(id);
		var elements = [...filtering.children]

		const update = ()=>{
			var fillonempty = element.hasAttribute('fillonempty')
			var any = false
			if(fillonempty){
				any = checkerboard.size==0
			}
			console.log(fillonempty,any)
			elements.forEach(filter=>{
				var categories = filter.getAttribute('categories').split(' ')
				var isgood = [...checkerboard].some(category=>categories.includes(category))
				isgood ||= any
				filter.style.display = isgood ?"flex":"none";
			})
		}
		caterories.forEach(category=>{
			category.classList.add('list-group-item')
			category.addEventListener('click',(ev)=>{
				var name = ev.target.getAttribute('category')
				if(checkerboard.has(name)){
					checkerboard.delete(name)
					ev.target.classList.remove("active")
				}else{
					checkerboard.add(name)
					ev.target.classList.add("active")
				}
				update()
			})
		})

		update()
		
	})
}
function UpdateInputs(){
	// checkbox
	const checkboxes = document.querySelectorAll('input[type=checkbox]:not([hidden])')
	checkboxes.forEach(checkbox=>{
		checkbox.style.display = "none"
		const close = ()=>{
			// ctx.strokeStyle = "#f00"
			// ctx.stroke(new Path2D("M0,0L100,100M0,100L100,0"))
		}
		var ctx = document.createElement("canvas").getContext('2d')
		ctx.canvas.width = ctx.canvas.height = 100
		ctx.lineWidth = 20
		ctx.canvas.checked = false
		const update = ()=>{
			ctx.clearRect(0,0,100,100)
			if(ctx.canvas.checked = checkbox.checked){
				ctx.strokeStyle = "#0c2"
				ctx.stroke(new Path2D("M0,25L30,75L100,25"))
			}else{
				close()
			}
			ctx.canvas.dispatchEvent(new Event("change",{}))
		}
		ctx.canvas.addEventListener('click',()=>{checkbox.checked = !checkbox.checked;update()})
		ctx.canvas.onchange = checkbox.onchange
		checkbox.onchange = null
		checkbox.update = update
		checkbox.addEventListener('change',()=>{update()})
		close()
		// ctx.canvas.style = "width:1.5em;height:1.5em;border:rgb(var(--color)) solid .1em;border-radius:.2em;margin:1.2em;"
		checkbox.after(ctx.canvas)
	})
}
function UpdateDialog(){
	var hash = location.hash
	if(hash.length<1)return
	hash = document.querySelector(hash)
	if(hash && hash.tagName == "DIALOG"){
		hash.setAttribute('open',"true")
		hash.close = function(){
			this.removeAttribute('open')
			document.body.classList.remove("dialog-focus")
			location.hash = ""
		}
		document.body.classList.add("dialog-focus")
	}
}
let preloads;
window.addEventListener('load',()=>{
	UpdateFilter()
	UpdateTabber()
	UpdateInputs()
	UpdateDialog()
	preloads = document.querySelectorAll('.preload')
	preloads.forEach(preload=>{
		preload.classList.remove('preload')
		preload.style.display="none"
	})
})
window.addEventListener('beforeUnloadListener ',()=>{
	preloads.forEach(preload=>{preload.classList.add('preload')})
})
window.addEventListener('hashchange',()=>{
	UpdateDialog()
})