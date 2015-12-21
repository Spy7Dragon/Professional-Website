
<script language="JavaScript">

// ==============================================
// Copyright 2004 by CodeLifter.com
// Free for all; but please leave in this header.
// ==============================================

var Quotation = new Array()

Quotation[0] = "";

var Q = Quotation.length;
var whichQuotation = Math.round(Math.random() * Q - 1));

function showQuotation()
{
	document.write(Quotation[whichQuotation]);
}
	
showQuotation();

</script>
	