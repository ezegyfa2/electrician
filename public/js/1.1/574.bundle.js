"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[574],{6103:(t,i,h)=>{h.d(i,{Z:()=>d});var s=h(1519),e=h.n(s)()((function(t){return t[1]}));e.push([t.id,".image[data-v-1c42a7cb]{display:block}",""]);const d=e},1574:(t,i,h)=>{h.r(i),h.d(i,{default:()=>a});const s={data:()=>({left:0,top:0,width:0,height:0}),mounted(){this.updateSize(),new ResizeObserver(this.updateSize).observe(this.$el)},computed:{bottomPosition(){return this.top+this.height}},methods:{updateSize(){const t=this.$el;this.$set(this,"left",t.offsetLeft),this.$set(this,"top",t.offsetTop),this.$set(this,"width",t.offsetWidth),this.$set(this,"height",t.offsetHeight)}}};var e=h(1900);const d={mixins:[(0,e.Z)(s,undefined,undefined,!1,null,null,null).exports,h(7476).Z],props:{src:{type:String},alt:{type:String},lazy_load:{type:Boolean,default:!0},widths:{type:Array}},computed:{srcWithSize(){return this.src?this.widths?"/images/"+this.src+"/"+this.currentWidth+".webp":this.width?"get-image?path="+this.src+"&width="+this.width:this.src:""},currentWidth(){if(this.widths){if(this.widths.length>8)throw new Error("Invalid width length");return this.windowSize.width>2560?this.getWidth(7):this.windowSize.width>1440?this.getWidth(6):this.windowSize.width>1024?this.getWidth(5):this.windowSize.width>768?this.getWidth(4):this.windowSize.width>425?this.getWidth(3):this.windowSize.width>375?this.getWidth(2):this.windowSize.width>320?this.getWidth(1):this.getWidth(0)}return null}},methods:{getWidth(t){return this.widths.length>=t+1?this.widths[t]:this.widths[this.widths.length-1]}}};var n=h(3379),r=h.n(n),o=h(6103),l={insert:"head",singleton:!1};r()(o.Z,l);o.Z.locals;const a=(0,e.Z)(d,(function(){var t=this;return(0,t._self._c)("img",{staticClass:"image",attrs:{src:t.srcWithSize,alt:t.alt,loading:t.lazy_load?"lazy":"eager"}})}),[],!1,null,"1c42a7cb",null).exports}}]);