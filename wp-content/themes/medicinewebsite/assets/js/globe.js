var dir='left',
    auto=1,
    i=0,
    globe=document.getElementById("globe"),
    clouds1=document.getElementById("clouds1"),
    clouds2=document.getElementById("clouds2"),
    container=document.getElementById("custom-globe-container");

Draggable.create(globe, {
    trigger:container,
    bounds:globe,
    edgeResistance:0.98,
    type:"x",
    throwProps:true,
    onDragStart:function(){auto=0},
    onDrag:function(){
        (globe._gsTransform.x>0) ? auto=1 : auto=-1;
    }
})

Draggable.zIndex=10;
Draggable.get("#globe").vars.cursor = "pointer";
TweenMax.ticker.addEventListener("tick", update);

function update(e){
    i = i+(globe._gsTransform.x)/2
    i = i+auto;
    TweenMax.set(clouds1,    {backgroundPosition:i+"px 0px"})
    TweenMax.set(clouds2,    {backgroundPosition:i*1.5+"px 0px"})
    TweenMax.set(globe,     {backgroundPosition:i/1.3+"px 0px"})
    TweenMax.set(container, {backgroundPosition:i/2+"px 0px"})
}