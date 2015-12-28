// Funcao utilizada para retornar uma string a partir de uma string e nao com o campo (input) ;)
function mascara_real(campo) {
   //	campo= round_number(campo,2);   // retira os decimais
   aux= campo;

   // Retira os caracteres de decimal e mil..
   aux = aux.toString().replace( ".", "" );
   aux = aux.toString().replace( ",", "" );
   neg= aux.charAt(0)=='-';
   aux = aux.toString().replace( "-", "" );

   len = aux.length;
   var i= 0;
   var j=1;
   dec= 0;
   result= '';

   for(i=len-1; i>=0; i--) {

      // inclui o decimanl
      if(dec==0) {
         if (j == 3) {
            result= ','+result;
            j = 0;
            dec=1;
         }
      }
      if (j == 3) {
         result= '.'+result;
         j = 0;
      }
      result= aux.charAt(i)+result;
      j++;
   }

   // valor negativo
   if(neg) result= '-'+result;
   return result;
}

function mascara_moeda(fld, e) {
   milSep= '.';
   decSep= ',';
   var sep = 0;
   var key = '';
   var i = j = 0;
   var len = len2 = 0;
   var strCheck = '0123456789';
   var aux = aux2 = '';
   var whichCode = (window.Event) ? e.which : e.keyCode;
   if (whichCode == 13) return true;  // Enter
   if (whichCode == 8) return true;  // Backspace
   if (whichCode == 0) return true;  // indefinido
   key = String.fromCharCode(whichCode);  // Get key value from key code
   if (strCheck.indexOf(key) == -1) return false;  // Not a valid key
   len = fld.value.length;
   for(i = 0; i < len; i++)
      if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
   aux = '';
   for(; i < len; i++)
      if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
   aux += key;
   len = aux.length;
   if (len == 0) fld.value = '';
   if (len == 1) fld.value = '0'+ decSep + '0' + aux;
   if (len == 2) fld.value = '0'+ decSep + aux;
   if (len > 2) {
      aux2 = '';
      for (j = 0, i = len - 3; i >= 0; i--) {
         if (j == 3) {
            aux2 += milSep;
            j = 0;
         }
         aux2 += aux.charAt(i);
         j++;
      }
      fld.value = '';
      len2 = aux2.length;
      for (i = len2 - 1; i >= 0; i--)
         fld.value += aux2.charAt(i);
      fld.value += decSep + aux.substr(len - 2, len);
   }
   return false;
}

function mascara_data() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 10 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam == 1) src.value = vr;
      if ( tam == 3) src.value = vr.substr( 0, 2 ) + '/' + vr.substr( 4, tam );
      if ( tam == 6) src.value = vr.substr( 0, 5 ) + '/' + vr.substr( 7, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}

function mascara_cpf() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 10 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam <= 2 ) src.value = vr;
      if ( tam == 4) src.value = vr.substr( 0, 3 ) + '.' + vr.substr( 4, tam );
      if ( tam == 8) src.value = vr.substr( 0, 7 ) + '.' + vr.substr( 8, tam );
      if ( tam == 11 || tam == 12) src.value = vr.substr( 0, 11 ) + '-' + vr.substr( 12, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}

function mascara_realpersonalizado(o, tam){
   var whichCode = (window.Event) ? window.Event.which : window.Event.keyCode;
   if(whichCode == 44){
      o.value.replace(",", "");
      return false;

   }
   var campo = o.value;
   aux= campo;

   // Retira os caracteres de decimal e mil..
   aux = aux.toString().replace( ".", "" );
   aux = aux.toString().replace( ",", "" );
   neg= aux.charAt(0)=='-';
   aux = aux.toString().replace( "-", "" );

   len = aux.length;
   var i= 0;
   var j=1;
   dec= 0;
   result= '';

   for(i=len-1; i>=0; i--) {

      // inclui o decimanl
      if(dec==0) {
         if (j == tam+1) {
            result= ','+result;
            j = 0;
            dec=1;
         }
      }
      if (j == 3) {
         result= '.'+result;
         j = 0;
      }
      result= aux.charAt(i)+result;
      j++;
   }

   // valor negativo
   if(neg) result= '-'+result;
   o.value = result;
}

function mascara_personalizado(o, tam){
    
}

function mascara_cnpj() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 18 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      // 99.999.999/9999-99
      // 012345678901234567
      if (tam <= 2) src.value = vr;
      else if (tam == 3) src.value = vr.substr(0,2) + '.' + vr.substr(3,tam);
      else if (tam == 7) src.value = vr.substr(0,6) + '.' + vr.substr(7,tam);
      else if (tam == 11) src.value = vr.substr(0,10) + '/' + vr.substr(11,tam);
      else if (tam == 16) src.value = vr.substr(0,15) + '-' + vr.substr(16,tam);
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}
// 1.1.11.11.11.11.11.11
function mascara_elemento(campo, e) {
   // IE
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      // FF
      var src = campo;
      if (src.nodeType == 3) src = src.parentNode;
      // get the character code of the pressed button
      key = (e.charCode) ? e.charCode :((e.keyCode) ? e.keyCode :((e.which) ? e.which : 0));
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 20 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam <= 1 ) src.value = vr;
      if ( tam == 2) src.value = vr.substr( 0, 1 ) + '.' + vr.substr( 2, tam );
      if ( tam == 4) src.value = vr.substr( 0, 3 ) + '.' + vr.substr( 4, tam );
      if ( tam == 7) src.value = vr.substr( 0, 6 ) + '.' + vr.substr( 7, tam );
      if ( tam == 10) src.value = vr.substr( 0, 9 ) + '.' + vr.substr( 10, tam );
      if ( tam == 13) src.value = vr.substr( 0, 12 ) + '.' + vr.substr( 13, tam );
      if ( tam == 16) src.value = vr.substr( 0, 15 ) + '.' + vr.substr( 16, tam );
      if ( tam == 19) src.value = vr.substr( 0, 18 ) + '.' + vr.substr( 19, tam );
   //    if ( tam == 11 || tam == 12) src.value = vr.substr( 0, 11 ) + '-' + vr.substr( 12, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}
// 99.999.99.999.9999.9999
function mascara_funcional_programatica(campo, e) {
   // IE
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      // FF
      var src = campo;
      if (src.nodeType == 3) src = src.parentNode;
      // get the character code of the pressed button
      key = (e.charCode) ? e.charCode :((e.keyCode) ? e.keyCode :((e.which) ? e.which : 0));
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 20 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam <= 1 ) src.value = vr;
      if ( tam == 3) src.value = vr.substr( 0, 2 ) + '.' + vr.substr( 3, tam );
      if ( tam == 7) src.value = vr.substr( 0, 6 ) + '.' + vr.substr( 7, tam );
      if ( tam == 10) src.value = vr.substr( 0, 9 ) + '.' + vr.substr( 10, tam );
      if ( tam == 14) src.value = vr.substr( 0, 13 ) + '.' + vr.substr( 14, tam );
      if ( tam == 19) src.value = vr.substr( 0, 18 ) + '.' + vr.substr( 19, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}

// 1.1.11.11.11.11.11.11
// 1.0.0.0.00.00.00.00
function mascara_rubrica(campo, e) {
   // IE
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      // FF
      var src = campo;
      if (src.nodeType == 3) src = src.parentNode;
      // get the character code of the pressed button
      key = (e.charCode) ? e.charCode :((e.keyCode) ? e.keyCode :((e.which) ? e.which : 0));
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 18 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam <= 1 ) src.value = vr;
      if ( tam == 2) src.value = vr.substr( 0, 1 ) + '.' + vr.substr( 2, tam );
      if ( tam == 4) src.value = vr.substr( 0, 3 ) + '.' + vr.substr( 4, tam );
      if ( tam == 6) src.value = vr.substr( 0, 5 ) + '.' + vr.substr( 6, tam );
      if ( tam == 8) src.value = vr.substr( 0, 7 ) + '.' + vr.substr( 8, tam );
      if ( tam == 11) src.value = vr.substr( 0, 10 ) + '.' + vr.substr( 11, tam );
      if ( tam == 14) src.value = vr.substr( 0, 13 ) + '.' + vr.substr( 14, tam );
      if ( tam == 17) src.value = vr.substr( 0, 16 ) + '.' + vr.substr( 17, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}


function mascara_competencia() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 7 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      // 99.999.999/9999-99
      // 012345678901234567
      if (tam <= 2) src.value = vr;
      else if (tam == 3) src.value = vr.substr(0,2) + '/' + vr.substr(3,tam);
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}


function mascara_cep() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 10 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam == 1) src.value = vr;
      if ( tam == 6) src.value = vr.substr( 0, 6 ) + '-' + vr.substr( 8, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}

function mascara_fone() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   vr = vr.replace("-","");
   var tam = vr.length ;
   if (tam < 8 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if (tam>4) src.value = vr.substr(0, tam-4) + '-' + vr.substr( tam - 4, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}

function mascara_numero(tammax, e) {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = e.target;
      var key = e.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < tammax && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
   // nem faz nada :)
   } else if (window.event) window.event.returnValue = false;
   else e.preventDefault();
}

function mascara_hora() {
   if (window.event)	{
      var src = window.event.srcElement;
      var key = window.event.keyCode;
   } else {
      var src = event.target;
      var key = event.which;
   }
   var tecla = String.fromCharCode(key).toUpperCase().charCodeAt(0);
   vr = '';
   vr = src.value;
   var tam = vr.length ;
   if (tam < 5 && tecla != 8) tam = vr.length + 1;
   if (tecla == 8) tam = tam - 1;
   if (tecla == 0 || tecla == 8 || tecla == 9 || tecla >= 48 && tecla <= 57) {
      if ( tam == 1) src.value = vr;
      if ( tam == 3) src.value = vr.substr( 0, 2 ) + ':' + vr.substr( 4, tam );
   } else if (window.event) window.event.returnValue = false;
   else event.preventDefault();
}


function mascara(o,f){
   v_obj=o;
   v_fun=f;
   setTimeout("execmascara()",1);
}

function execmascara(){
   v_obj.value=v_fun(v_obj.value);
}

function leech(v){
   v=v.replace(/o/gi,"0");
   v=v.replace(/i/gi,"1");
   v=v.replace(/z/gi,"2");
   v=v.replace(/e/gi,"3");
   v=v.replace(/a/gi,"4");
   v=v.replace(/s/gi,"5");
   v=v.replace(/t/gi,"7");
   return v;
}

function msk_numero(v){
   return v.replace(/\D/g,"");
}

function msk_data(v){
   v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
   v=v.replace(/(\d{2})(\d)/,"$1/$2"); //Coloca barra entre o segundo e o terceiro digito
   v=v.replace(/(\d{2})(\d)/,"$1/$2"); //Coloca barra entre o quinto e o sexto digito
   return v;
}

function msk_hora_min(v){
   v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
   v=v.replace(/(\d{2})(\d)/,"$1:$2"); //Coloca barra entre o segundo e o terceiro digito
   return v;
}

function msk_lei(v) {
   v=v.replace(/\D/g,"");                 //Remove tudo o que não é dígito
   l= v.length-2;
   if( l> 0) {
      v= v.substr(0,l)+"/"+v.substr(l,2);
   }
   return v;
}

function msk_cnpj(v){
   v=v.replace(/\D/g,"");                           //Remove tudo o que não é dígito
   v=v.replace(/^(\d{2})(\d)/,"$1.$2");             //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3"); //Coloca ponto entre o quinto e o sexto dígitos
   v=v.replace(/\.(\d{3})(\d)/,".$1/$2");           //Coloca uma barra entre o oitavo e o nono dígitos
   v=v.replace(/(\d{4})(\d)/,"$1-$2");              //Coloca um hífen depois do bloco de quatro dígitos
   return v;
}

function msk_cpf(v){
   v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
   v=v.replace(/(\d{3})(\d)/,"$1.$2");      //Coloca um ponto entre o terceiro e o quarto dígitos
   v=v.replace(/(\d{3})(\d)/,"$1.$2");       //Coloca um ponto entre o terceiro e o quarto dígitos
   //de novo (para o segundo bloco de números)
   v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos
   return v;
}

function msk_cep(v){
   v=v.replace(/D/g,"");                //Remove tudo o que não é dígito
   v=v.replace(/^(\d{5})(\d)/,"$1-$2"); //Esse é tão fácil que não merece explicações
   return v;
}

function msk_valor(v){
   v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
   if(v.length<6) v=v.replace(/(\d)(\d{2})$/,"$1,$2");
   else v=v.replace(/(\d)(\d{3})(\d{2})$/,"$1.$2,$3"); //Coloca virgula antes dos 2 últimos digitos
   return v;
}

function msk_romanos(v){
   v=v.toUpperCase();             //Maiúsculas
   v=v.replace(/[^IVXLCDM]/g,""); //Remove tudo o que não for I, V, X, L, C, D ou M
   //Essa é complicada! Copiei daqui: http://www.diveintopython.org/refactoring/refactoring.html
   while(v.replace(/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/,"")!="");
   v=v.replace(/.$/,"");
   return v;
}

function msk_site(v){
   //Esse sem comentarios para que você entenda sozinho ;-)
   v=v.replace(/^http:\/\/?/,"");
   dominio=v;
   caminho="";
   if(v.indexOf("/")>-1)
      dominio=v.split("/")[0];
   caminho=v.replace(/[^\/]*/,"");
   dominio=dominio.replace(/[^\w\.\+-:@]/g,"");
   caminho=caminho.replace(/[^\w\d\+-@:\?&=%\(\)\.]/g,"");
   caminho=caminho.replace(/([\?&])=/,"$1");
   if(caminho!="")dominio=dominio.replace(/\.+$/,"");
   v="http://"+dominio+caminho;
   return v;
}

function msk_telefone(v){
   v=v.replace(/\D/g,"");         //Remove tudo o que não é dígito
   v=v.replace(/^(\d\d)(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
   v=v.replace(/(\d{4})(\d)/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
   return v;
}

function msk_codigo_tce(v){
   v=v.replace(/\D/g,"");                           //Remove tudo o que não é dígito
   v=v.replace(/^(\d{1})(\d)/,"$1.$2");             //Coloca ponto entre o primeiro e o segundo dígitos
   v=v.replace(/^(\d{1})\.(\d{1})(\d)/,"$1.$2.$3"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})(\d)/,"$1.$2.$3.$4"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6.$7"); //Coloca ponto entre o segundo e o terceiro dígitos
   return v;
}

function msk_elemento(v){
   v=v.replace(/\D/g,"");                           //Remove tudo o que não é dígito
   v=v.replace(/^(\d{1})(\d)/,"$1.$2");             //Coloca ponto entre o primeiro e o segundo dígitos
   v=v.replace(/^(\d{1})\.(\d{1})(\d)/,"$1.$2.$3"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})(\d)/,"$1.$2.$3.$4"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6"); //Coloca ponto entre o segundo e o terceiro dígitos
   return v;
}

// Formata campo conforme mascara do Plano Contabil
function msk_codigo_pc(v){
   v=v.replace(/\D/g,"");                           //Remove tudo o que não é dígito
   v=v.replace(/^(\d{1})(\d)/,"$1.$2");             //Coloca ponto entre o primeiro e o segundo dígitos
   v=v.replace(/^(\d{1})\.(\d{2})(\d)/,"$1.$2.$3"); //Coloca ponto entre o terceiro e o quarto dígitos
   v=v.replace(/^(\d{1})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6.$7"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{1})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})\.(\d{2})(\d)/,"$1.$2.$3.$4.$5.$6.$7.$8"); //Coloca ponto entre o segundo e o terceiro dígitos
   return v;
}

// Formata campo conforme mascara do Plano Contabil
function msk_funcional_programatica(v){
   v=v.replace(/\D/g,"");                           //Remove tudo o que não é dígito
   v=v.replace(/^(\d{2})(\d)/,"$1.$2");           //Coloca ponto entre o primeiro e o segundo dígitos
   v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3"); //Coloca ponto entre o terceiro e o quarto dígitos
   v=v.replace(/^(\d{2})\.(\d{3})\.(\d{2})(\d)/,"$1.$2.$3.$4"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{2})\.(\d{3})\.(\d{2})\.(\d{3})(\d)/,"$1.$2.$3.$4.$5"); //Coloca ponto entre o segundo e o terceiro dígitos
   v=v.replace(/^(\d{2})\.(\d{3})\.(\d{2})\.(\d{3})\.(\d{4})(\d)/,"$1.$2.$3.$4.$5.$6"); //Coloca ponto entre o segundo e o terceiro dígitos
   return v;
}


function round_number (num, dec) { 
   // low-level numeric format with upward rounding at 5+
   var cDec = '.'; // decimal point symbol
   if (!(dec >= 0 && dec <= 9))
      dec = 2;
   if (isNaN (num) || num == '') { // zero values are returned in proper decimal format
      var sdec = "";
      for (var i = 0; i < dec; i++)
         sdec += '0';
      return "0" + (sdec != "" ? cDec + sdec : "");
   }
   var snum = new String (num);
   var arr_num = snum.split (cDec);
   var neg = '';
   var nullify = 0;
   dec_a = arr_num.length > 1 ? arr_num[1].length : 0;
   if (dec_a <= dec) { // fill decimal places with trailing zeros if necessary
      if (!dec_a)
         arr_num[1] = "";
      for (var i = 0; i < dec - dec_a; i++)
         arr_num[1] += '0';
      dec_a = dec;
   }
   // total decimal places in value before rounding and formatting
   dec_i = dec_a;
   dec_a -= dec;
 	
   if (arr_num[0].charAt(0) == '-') { // preserve negative symbol, remove from value (calculations)
      neg = '-';
      arr_num[0] = arr_num[0].substring (1, arr_num[0].length);
   }
 	
   // case when whole value is 0
   if (!parseInt (arr_num[0])) {
      // nullify a zero whole value for correct decimal point placement
      arr_num[0] = "1";
      // 0 whole # would not preserve amount in calc.
      nullify = 1;
   // flag to remove greatest 1 portion from whole #
   }
   var whole = parseInt (arr_num[0] * Math.pow (10, arr_num[1].length));
   // remove leading zeros
   for (i = 0; i < arr_num[1].length; i++)
      if (arr_num[1].charAt (i) != '0')
         break;
   if (arr_num[1].length == i) // decimal portion blank or all zeros
      return (neg + arr_num[0] + (arr_num[1] != "" ? (cDec + arr_num[1]) : ""));
   whole += parseInt (arr_num[1].substring (i, arr_num[1].length));
   if (arr_num[1].length != dec) {
      // round number affecting appropriate cluster of decimal places
      var diff = "";
      var str = new String (whole);
      for (i = dec_a; i > 0; i--)
         diff += str.charAt (str.length - i);
      diff = Math.pow (10, dec_a) - parseInt (diff);
      whole += ((diff <= 5 * Math.pow (10, dec_a - 1)) ? diff : 0);
   }
   str = new String (whole);
   var str_f = "";
   var j = 0;
   var k = 0;
   if (nullify)
   {
      arr_num[0] = "0"; // remove 1 from greatest decimal place (restoration)
      str = (parseInt (str.charAt(0)) - 1) + str.substring (1, str.length);
   } else // re-assign whole numeric portion from entire numeric string value
      arr_num[0] = str.substring (0, str.length - dec_i);
   for (i = 0; i < str.length; i++) {
      // combine portions of decimal number (whole, fraction, sign)
      if (k - 1 > dec)
         break; // fraction termination case
      if (j == arr_num[0].length) {
         if (!j)
            str_f += 0;
         str_f += (dec != 0 ? cDec : ''); // insert decimal point
         --i; // backtrack one character
         k++; // signal fraction count
      } else // assign character by character
         str_f += str.charAt (i);
      j++;
      if (k) // fractional counter increment
         k++;
   }
   return neg + str_f;
}

function addEvent(elm, evType, fn, useCapture) {
  
   if (elm.addEventListener) {
      elm.addEventListener(evType, fn, false);
      return true;
   }
   else if (elm.attachEvent) {
      var r = elm.attachEvent('on' + evType, fn);
      return r;
   }
   else {
      elm['on' + evType] = fn;
   }
   return false;
}