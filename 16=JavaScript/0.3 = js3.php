<script language="javascript">

// ENTER TEXT BELOW. CAN *NOT* INCLUDE NORMAL HTML CODE.
var text='WELCOME';
var delay=10;              // ��駤�Ҥ�������㹡�á���� (����Ţ�����������)
var txtw=30;               // ��駤�Ҥ�����ҧ�����ҧ����ѡ�� 
var xoff=285;               // ���˹�����ʴ�����ѡ�èҡ��ҹ������
var yoff=5;               // ���˹�����ʴ�����ѡ�èҡ��ҹ��
var sampleinc=0.3;
var amplitude=35;          // �����٧������ѡ���á���駶֧ (����Ţ�ҡ����٧
var mousefollow=false;
var beghtml='<h1>';
var endhtml='</h1>';
//********** NO NEED TO EDIT BELOW HERE **********\\

ns4 = (navigator.appName.indexOf("Netscape")>=0 && document.layers)? true : false;
ie4 = (document.all && !document.getElementById)? true : false;
ie5 = (document.all && document.getElementById)? true : false;
ns6 = (document.getElementById && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var txtA=new Array();
text=text.split('');
var t='';
var ex=sampleinc;
var mousex=0;
var mousey=0;
for(i=1;i<=text.length;i++){
t+=(ns4)? '<layer name="txt'+i+'" top="-1000" left="0" width="'+txtw+'" height="1">' : '<div id="txt'+i+'" style="position:absolute; top:-1000px; left:0px; height:1px; width:'+txtw+'; visibility:visible;">';
t+=beghtml+text[i-1]+endhtml;
t+=(ns4)? '</layer>' : '</div>';
}
document.write(t);

function adjmousepos(evt){
mousex=xoff+((ie4||ie5)?event.clientX+document.body.scrollLeft:evt.pageX);
mousey=yoff+((ie4||ie5)?event.clientY+document.body.scrollTop:evt.pageY);
}

function getidleft(id){
if(ns4)return id.left;
else return parseInt(id.style.left);
}

function getidtop(id){
if(ns4)return id.top;
else return parseInt(id.style.top);
}

function getwindowwidth(){
if(ie4||ie5)return document.body.clientWidth+document.body.scrollLeft;
else return window.innerWidth+pageXOffset;
}

function moveid(id,x,y){
if(ns4)id.moveTo(x,y);
else{
id.style.left=x+'px';
id.style.top=y+'px';
}}

function movetxts(){
for(i=text.length;i>1;i=i-1){
if(getidleft(txtA[i-1])+txtw*2>=getwindowwidth()){
moveid(txtA[i-1],0,-1000);
moveid(txtA[i],0,-1000);
}else moveid(txtA[i], getidleft(txtA[i-1])+txtw, getidtop(txtA[i-1]));
}
moveid(txtA[1],x1,y1);
ex=ex+sampleinc;
}

function movetxts(){
for(i=text.length;i>1;i=i-1){
if(getidleft(txtA[i-1])+txtw*2>=getwindowwidth()){
moveid(txtA[i-1],0,-1000);
moveid(txtA[i],0,-1000);
}else moveid(txtA[i], getidleft(txtA[i-1])+txtw, getidtop(txtA[i-1]));
}
moveid(txtA[1],xoff+mousex,yoff+mousey+(Math.sin(ex)*amplitude)+Math.abs(amplitude));
ex=ex+sampleinc;
}

window.onload=function(){
for(i=1;i<=text.length;i++)txtA[i]=(ns4)?document.layers['txt'+i]:(ie4)?document.all['txt'+i]:document.getElementById('txt'+i);
setInterval('movetxts()',delay);
if(mousefollow){
if(ns4)document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=adjmousepos;
}}

</script>