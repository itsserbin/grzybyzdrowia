import{o as n,b as r,r as d,d as m,e as t,a,w as l,F as _,f as i}from"./application-bc809870.js";import{a as p,_ as u}from"./ModalCallback-16eeb937.js";import f from"./Video-63a68f63.js";import"./Button-1d634191.js";import"./WaitingForm-634fd459.js";import"./SectionTitle-bad070e4.js";const x=["type"],h={__name:"ButtonOutline",props:{type:{type:String,default:"submit"}},setup(o){return(e,s)=>(n(),r("button",{type:o.type,class:"border-2 border-[#D72B00] text-[#D72B00] text-lg p-[0.6em] px-[1.6em] rounded-[7px] whitespace-nowrap"},[d(e.$slots,"default")],8,x))}},b={class:"max-md:order-1"},y=t("p",{class:"text-xl mb-[1.25em]"},"Грибы для здоровья",-1),B=t("h1",{class:"text-6xl leading-14 font-semibold"},"ГРИБНАЯ АПТЕЧКА",-1),V=t("p",{class:"text-2xl mt-4 mb-[1.25em]"},"Мухомор красный, Ежевик гребенчатый, Кордицепс милитарис, Чага сибирская, Майтаке, Шиитаке, Рейши и другие грибы для здоровья. Доставка по всему миру. ",-1),$={class:"flex gap-4 max-md:flex-col"},F={__name:"HealthyInfo",setup(o){const e=m(!1);function s(){e.value=!0}function c(){e.value=!1}return(g,v)=>(n(),r(_,null,[t("div",b,[y,B,V,t("div",$,[a(u,{title:"Заказать обратный звонок"}),a(h,{onClick:s},{default:l(()=>[i("Видео")]),_:1})])]),a(p,{modelValue:e.value,"onUpdate:modelValue":c},{default:l(()=>[a(f)]),_:1},8,["modelValue"])],64))}};export{F as default};