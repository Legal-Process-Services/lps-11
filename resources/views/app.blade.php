<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        <SCRIPT LANGUAGE="JavaScript">
            <!-- //Begin
            var sTotal=0, sTotal2=0, sTotal3=0;
            function getElement(iVal){
                return (document.all && !document.getElementById) ? document.all[iVal] : document.getElementById(iVal);
            }
            //========================================
            function checkAll(field,ele,Amount){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]){
                        field[i].checked = true ;
                        AddThis(field[i],ele,0);
                    }
                }
                getElement("acctBalTot").innerHTML = "$"+Amount.toFixed(2);
                getElement("acctChargeTot").innerHTML = "$"+Amount.toFixed(2);
                if ( getElement("os0") ) getElement("os0").value = "$"+Amount.toFixed(2);
                sTotal = Amount;
            }
            //========================================
            function uncheckAll(field,ele){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]) field[i].checked = false ;
                }
                document.forms["myform"].elements[ele].value = "";
                sTotal = 0;
                getElement("acctBalTot").innerHTML = "$0.00";
                getElement("acctChargeTot").innerHTML = "$0.00";
            }
            //========================================  workOrder_

            function AddThis(iVal,ele,Amount){
                var tForm = document.forms["myform"];
                var Ele = tForm.elements[ele];
                if (iVal.checked==true) {
                    Ele.value += '\''+iVal.value+"',";
                    sTotal += Amount;
                }
                else {
                    var Xpr = new RegExp('\''+iVal.value+'\',');
                    var oldData = Ele.value;
                    Ele.value = oldData.replace(Xpr,"");
                    sTotal -= Amount;
                    if (sTotal < 0) sTotal = 0;
                }
                getElement("acctBalTot").innerHTML = "$"+sTotal.toFixed(2);
                getElement("acctChargeTot").innerHTML = "$"+sTotal.toFixed(2);
            }

            //========================================
            function checkAll2(field,ele,Amount){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]){
                        field[i].checked = true ;
                        AddThis2(field[i],ele,0);
                    }
                }
                getElement("acctChargeTot").innerHTML = "$"+Amount.toFixed(2);
                sTotal2 = Amount;
            }
            //========================================
            function uncheckAll2(field,ele){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]) field[i].checked = false ;
                }
                document.forms["myform2"].elements[ele].value = "";
                sTotal2 = 0;
                getElement("acctChargeTot").innerHTML = "$0.00";
            }
            //======================================== //
            function AddThis2(iVal,ele,Amount){
                var tForm = document.forms["myform2"];
                var Ele = tForm.elements[ele];
                if (iVal.checked==true) {
                    Ele.value += '\''+iVal.value+'\',';
                    sTotal2 += Amount;
                }
                else {
                    var Xpr = new RegExp('\''+iVal.value+'\',');
                    var oldData = Ele.value;
                    Ele.value = oldData.replace(Xpr,"");
                    sTotal2 -= Amount;
                    if (sTotal2 < 0) sTotal2 = 0;
                }
                getElement("acctChargeTot").innerHTML = "$"+sTotal2.toFixed(2);
            }
            //========================================
            //========================================
            function checkAll3(field,ele,Amount){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]){
                        field[i].checked = true ;
                        AddThis3(field[i],ele,0);
                    }
                }
                getElement("satementTot").innerHTML = "$"+Amount.toFixed(2);
                sTotal3 = Amount;
            }
            //========================================
            function uncheckAll3(field,ele){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]) field[i].checked = false ;
                }
                document.forms["myform3"].elements[ele].value = "";
                sTotal3 = 0;
                getElement("satementTot").innerHTML = "$0.00";
            }
            //========================================
            function AddThis3(iVal,ele,Amount){
                var tForm = document.forms["myform3"];
                var Ele = tForm.elements[ele];
                if (iVal.checked==true) {
                    Ele.value += '\''+iVal.value+'\',';
                    sTotal3 += Amount;
                }
                else {
                    var Xpr = new RegExp('\''+iVal.value+'\',');
                    var oldData = Ele.value;
                    Ele.value = oldData.replace(Xpr,"");
                    sTotal3 -= Amount;
                    if (sTotal3 < 0) sTotal3 = 0;
                }
                getElement("satementTot").innerHTML = "$"+sTotal3.toFixed(2);
            }
            //========================================
            //========================================
            function checkAll4(field,ele){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]){
                        field[i].checked = true ;
                        AddThis4(field[i],ele);
                    }
                }
            }
            //========================================
            function uncheckAll4(field,ele){
                window.status = "ele: "+ele;
                for (i=0;i<=field.length;i++) {
                    if (field[i]) field[i].checked = false ;
                }
                document.forms["myform4"].elements[ele].value = "";
            }
            //========================================
            function AddThis4(iVal,ele){
                var tForm = document.forms["myform4"];
                var Ele = tForm.elements[ele];
                if (iVal.checked==true) {
                    Ele.value += '\''+iVal.value+'\',';
                }
                else {
                    var Xpr = new RegExp('\''+iVal.value+'\',');
                    var oldData = Ele.value;
                    Ele.value = oldData.replace(Xpr,"");
                }
            }
            //========================================
            lastone='empty';
            function showIt(lyr){
                if (lastone!='empty') lastone.style.display='none';
                lastone=document.getElementById(lyr);
                lastone.style.display='block';
            }
            //========================================
            lastone2='empty';
            function showIt2(lyr){
                if (lastone2!='empty') lastone2.style.display='none';
                lastone2=document.getElementById(lyr);
                lastone2.style.display='block';
            }
            lastone3='empty';
            function showIt3(lyr){
                if (lastone3!='empty') lastone3.style.display='none';
                lastone3=document.getElementById(lyr);
                lastone3.style.display='block';
            }
            //========================================
            function handleErr(msg,url,l){
                alert("JavaScript Error: "+msg+"\n\nURL: "+url+"\n\nLine: "+l+"\n\n");
            }

            onerror = handleErr;
            //  End -->
        </script>
        <SCRIPT language="JavaScript">
            function OnSubmitForm()
            {
                if(document.pressed == 'Print Payment Stub')
                {
                    document.myform.action ="pymt_stub.asp?val=1&cat=4&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'View Invoices Selected')
                {
                    document.myform.action ="invoice_print_selected.asp?val=1&cat=4&srt=WorkOrderNo";
                    {{--document.myform.action ="invoice_print_selected.asp?val=1&cat=4&srt={{$srt}}";--}}
                }
                else
                if(document.pressed == 'Spreadsheet')
                {
                    document.myform.action ="spreadsheet.asp?val=1&cat=4&srt=1";
                }
                return true;
            }
            function OnSubmitForm2()
            {
                if(document.pressed == 'Print Payment Stub')
                {
                    document.myform2.action ="pymt_stub.asp?val=2&cat=3&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'View Invoices Selected')
                {
                    document.myform2.action ="invoice_print_selected.asp?val=2&cat=3&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'Spreadsheet')
                {
                    document.myform2.action ="spreadsheet.asp?val=2&cat=3&srt=WorkOrderNo";
                }
                return true;
            }
            function OnSubmitForm3()
            {
                if(document.pressed == 'Print Payment Stub')
                {
                    document.myform3.action ="pymt_stub.asp?val=3&cat=2&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'View Invoices Selected')
                {
                    document.myform3.action ="invoice_print_selected.asp?val=3&cat=2&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'Spreadsheet')
                {
                    document.myform3.action ="spreadsheet.asp?val=3&cat=2&srt=WorkOrderNo";
                }
                return true;
            }
            function OnSubmitForm4()
            {
                if(document.pressed == 'View Updates Selected')
                {
                    document.myform4.action ="status_update_list.asp?val=1&cat=1&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'View Invoices Selected')
                {
                    document.myform4.action ="invoice_print_selected.asp?val=1&cat=4&srt=WorkOrderNo";
                }
                else
                if(document.pressed == 'Spreadsheet')
                {
                    document.myform4.action ="spreadsheet.asp?val=1&cat=1&srt=WorkOrderNo";
                }
                return true;
            }
        </SCRIPT>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
