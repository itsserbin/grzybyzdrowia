import{_ as p}from"./SectionTitle-bad070e4.js";import u from"./PriceTable-9fdf1052.js";import{o,b as s,a as l,F as _,g as d,u as m,c as i}from"./application-bc809870.js";const f={id:"price"},w={__name:"Prices",props:{products:{type:Array,default:[]}},setup(a){const n=((r,e)=>Array.from({length:Math.ceil(r.length/e)},(c,t)=>r.slice(t*e,t*e+e)))(a.products,5);return(r,e)=>(o(),s("section",f,[l(p,{main_title:"Цены",second_title:"На фасованные грибы"}),(o(!0),s(_,null,d(m(n),(c,t)=>(o(),i(u,{key:t,products:c,showHeader:t===0},null,8,["products","showHeader"]))),128))]))}};export{w as default};