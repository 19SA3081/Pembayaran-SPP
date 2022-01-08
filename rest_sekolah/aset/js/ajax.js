function getTujuan(id_tujuan) {
	
	  if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("kodetujuan").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","getTujuan.php",true);
	  xmlhttp3.send();
}

function getKota(id_prov) {
	
	  if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("cboKota").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","getKota.php?id_prov="+id_prov,true);
	  xmlhttp3.send();
}


function getKec(id_kota) {
	
	  if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("cboKec").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","getKec.php?id_kota="+id_kota,true);
	  xmlhttp3.send();
}

function getKel(id_kec) {
	
	  if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("cboKel").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","getKel.php?id_kec="+id_kec,true);
	  xmlhttp3.send();
}