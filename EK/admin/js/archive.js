const page="archive.php";

function receivedElement(){
 
}

(()=>{
  const qrcode="_elementmover_"manage-scdetails.php"_";
  let getChangeNum=()=>localStorage.getItem(prefix+"changedHtmlToMove")*1;
  let oldChangeNum=getChangeNum();
  let checkForChanges=()=>{
  let newChangeNum=getChangeNum();
  if(oldChangeNum!=newChangeNum){
    let element=new DOMParser().parseFromString(localStorage.getItem(prefix+"htmlToMove"),"text/html").querySelector("html>body>*");
    receivedElement(element)
  }
  oldChangeNum=newChangeNum
  setTimeout(checkForChanges,100);
}
checkForChanges();
})();



