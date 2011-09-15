function AVG(param) {
	
	//Checking if AVG was already created -the constructor should only run once per window:
	if (window.AVGRUN)
		return null;
	else
		window.AVGRUN= true;
	
	var IE_browser_version = parseFloat(navigator.appVersion.split("MSIE")[1]);
	
	//Create XMLHttpRequest object once, this significantly improves the performance	
	try
	{
		if( IE_browser_version <= 6 )
			var httpRequest = new ActiveXObject("Microsoft.XMLHttp");
		else
			var  httpRequest = new XMLHttpRequest();
	}
	catch(err)
	{
		return ErrorHandler();
	}
	
	/* ###############################
	Overriding Methods:
	 For each method define:
	 1. Private pointer to the original function
	 2. Privileged method to override the original function
	 The scan is done on the input variable
	################################### */


	/* -------------- Eval  ------------- */
	//Storing the original method in private variable
	var AVG_eval = eval;
	
	
	//Defining privileged method to override the original function
	var Chck_eval = function (inpStr) {

		if (isEmpty(inpStr))
			return AVG_eval(inpStr); 

		if (checkData(inpStr, AVG_eval))
		{
			try
			{
				res = AVG_eval(inpStr);
				return res;
			}
			catch(err){}
		}
	}

	//Overriding the original function
	//window.eval = Chck_eval;
	/* ----------------------------------------------------------------------------------- */


	/* -------------- document.write & document.writeln  ------------- */

	//Storing the original method in private variable
	var AVG_docWrite = document.write;
	var docWrite_Stuck=new Stuck(5);
	
	var AVG_docWriteln = document.writeln;
	var docWriteln_Stuck=new Stuck(5);
	

	//Defining privileged method to override the original function
	var Chck_docWrite = function (inpStr) {						

		if (arguments.length >1)
		{
			for(var i=1; i<arguments.length;i++)
			{
				inpStr+=arguments[i];
			}
		}
		
		inpStr = String(inpStr);
		if (isEmpty(inpStr) || docWrite_Stuck.find(inpStr))
		{
			try
			{
				if (IE_browser_version <= 7)
				{
					return AVG_docWrite(inpStr);
				}
				else
				{
					return AVG_docWrite.call(document, inpStr);
				}
			}
			catch(err){}
		}
		docWrite_Stuck.add(inpStr);
		
		if (checkData(inpStr, AVG_docWrite))
		{
			try
			{
				if (IE_browser_version <= 7 )
				{
					return AVG_docWrite(inpStr);
				}
				else
				{
					return AVG_docWrite.call(document, inpStr);
				}
			}
			catch(err){}
		}
	}

	var Chck_docWriteln = function (inpStr) {
		
		if (arguments.length >1)
		{
			for(var i=1; i<arguments.length;i++)		
			{
				inpStr+=arguments[i];
			}
		}

		inpStr = String(inpStr);
		if (isEmpty(inpStr) || docWriteln_Stuck.find(inpStr) )
		{
			try
			{
				if (IE_browser_version <= 7)
				{
					return AVG_docWriteln(inpStr);
				}
				else
				{
					return AVG_docWriteln.call(document, inpStr);
				}
			}
			catch(err){}
		}
		
		docWriteln_Stuck.add(inpStr);
		
		if (checkData(inpStr, AVG_docWriteln))
		{
			try
			{
				if (IE_browser_version <=7 )
				{
					return AVG_docWriteln(inpStr);
				}
				else
				{
					return AVG_docWriteln.call(document, inpStr);
				}
			}
			catch(err){}
		}
	}

	//Overriding the original function
	//document.write = Chck_docWrite;
	//document.writeln = Chck_docWriteln;
	/* ----------------------------------------------------------------------------------- */

	/* -------------- setTimeOut  ------------- */
	//Storing the original method in private variable
	var AVG_STO = setTimeout;
	
	//Store last calls value 
	
	var string_Stuck=new Stuck(5);
	
	//Defining privileged method to override the original function
	var Chck_STO = function (expr, timeout) {
	
		if (isEmpty(expr))
			return;
		//Bypass scan in case the expression is equal to the last one scanned
		if (string_Stuck.find(expr))
			return AVG_STO(expr, timeout);
		
		string_Stuck.add(expr);

		if (checkData(expr, AVG_STO))
		
		{
			try
			{
				return AVG_STO(expr, timeout);
			}
			catch(err){}
		}
	}

	//Overriding the original function
	//window.setTimeout = Chck_STO;
	/* ----------------------------------------------------------------------------------- */
	
	/* -------------- Function constructor  ------------- */
			
	//Storing the original constructor in private variable
	var AVG_Function = Function;

	//Defining privileged method to override the original function
	var Chck_Function = function () {

		function inheritance() {}
		inheritance.prototype = Function.prototype;

		var Args = [].slice.call(arguments);
		var Body = Args.pop();
		if (isEmpty(Body))
		{					
			AVG_eval('AVG_newFunc = AVG_Function(' + Args.join(',') + ')');
		}
		else
		{
			if (checkData('function(' + Args.join(',') + ') {' + Body + '}', AVG_Function) )
				eval('AVG_newFunc = function(' + Args.join(',') + ') {' + Body + '}');
			else
				return false;
			
		}

		AVG_newFunc.prototype = new inheritance();
		AVG_newFunc.prototype.constructor = AVG_newFunc;

		return AVG_newFunc;
	}

	//Setting Chck_Function's prototype to Function's prototype 
	//Chck_Function.prototype = Function.prototype;
	//Chck_Function.prototype.constructor = Chck_Function;
	
	//Overriding the original function
	//Function = Chck_Function;
	/* ----------------------------------------------------------------------------------- */
	
	/* -------------- setInterval  ------------- */
	//Storing the original method in private variable
	var AVG_SetInterval = setInterval;
		
	var SI_string_Stuck=new Stuck(5);
	
	//Defining privileged method to override the original function
	var Chck_SetInterval = function (expr, timeout) {
		if (isEmpty(expr))
			return;
		
		if ( SI_string_Stuck.find( String(expr) ) )
			return AVG_SetInterval(expr, timeout);
				
		SI_string_Stuck.add(String(expr));
		
		if (checkData(expr, AVG_SetInterval))
		{
			try
			{
				return AVG_SetInterval(expr, timeout);
			}
			catch(err){}
		}
	}
	
	//Overriding the original function
	//window.setInterval = Chck_SetInterval;
	/* ----------------------------------------------------------------------------------- */
	
	/* -------------- execScript  ------------- */
		
	//Run only if execScript is supported
	if (typeof(window["execScript"]) != "undefined")
	{
		//Storing the original method in private variable
		var AVG_execScript = execScript;
				
		//Defining privileged method to override the original function
		var Chck_execScript = function (expr, lang) {
			if (isEmpty(expr))
				return;						
			if (isEmpty(lang))
			{
			 lang='javascript';
			}	
				
			if (checkData(expr, AVG_execScript))
			{
				try
				{
					return AVG_execScript(expr, lang);
				}
				catch(err){}
			}
		}

		//Overriding the original function
		//window.execScript = Chck_execScript;
	}
	/* ----------------------------------------------------------------------------------- */
	
	/* -------------- unescape  ------------- */
	//Storing the original method in private variable
	var AVG_Unescape = unescape;
	
	var MIN_SCAN_LEN = 4; 
	
	var AGG_Unescape_Buff = "";
	
	//Defining privileged method to override the original function
	var Chck_Unescape = function (inpStr) {
		
		if (arguments.length >1)
		{
			for(var i=1; i<arguments.length;i++)
			{
				inpStr+=arguments[i];
			}
		}
		inpStr = String(inpStr);
		if (isEmpty(inpStr))
			return AVG_Unescape(inpStr);
		
		AGG_Unescape_Buff += String(inpStr);
		
		if (AGG_Unescape_Buff.length < MIN_SCAN_LEN*3 )
		{
		 	return AVG_Unescape(inpStr);
		}
		
		
		if (checkData(AGG_Unescape_Buff, AVG_Unescape))
		{
			AGG_Unescape_Buff = "";
			try
			{
				return AVG_Unescape(inpStr);
			}
			catch(err){}
		}
		AGG_Unescape_Buff = "";
	}
	
		//Overriding the original function
		window.unescape = Chck_Unescape;
	/* ----------------------------------------------------------------------------------- */

	//Block malicous code
	function BlockPage()
	{
		//redirect to block page + provide reason code + referrer
		//document.location="http://www.avg.com/blockpage?reason=&referrer=";
	}
	
	var SEND_ORIG_BUFF = true;
	
	function checkData(data, func)
	{
		//func: Currently not used, we can consider appending it to the buffer sent for scanning 
		//data: The buffer of the method

		data = String(data);
		var params =unescape_me(data);
		
		if ( SEND_ORIG_BUFF && params.length != data.length )
		{
			params+= "\n"+data;
		}
		
		try
		{
			httpRequest.open("POST", "/CC0227228D62/CheckData", false);
			httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			httpRequest.send(params);
		}
		catch(err)
		{
			return ErrorHandler();
		}
		
		if (httpRequest.readyState == 4)
			return respHandler(httpRequest);
		else
			return ErrorHandler();
	}

	function respHandler(httpRequest)
	{
		if (httpRequest.status == 200)
		{
			var resp = httpRequest.responseText;
			if ((resp == null)		|| 
				(resp == undefined)	||
				(0 == resp.length)	|| 
				("3" != resp.substr(0,1)))
			{
				return true;
			}
			else
			{
				BlockPage();
				return false;
			}
		}
		else
		{
			return ErrorHandler();
		}
	}
	
	function ErrorHandler()
	{
		//This function handles the logic of infrastructure errors.
		//For now, return true to avoid potential of false positives.
		return true;		
	}
	
	function isEmpty(Buf)
	{
		if ((Buf == 'undefined')	||
			(Buf === undefined)		||
			(Buf == "null")			||
			(Buf === null)			||
			(Buf == ""))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	

	function Stuck (a_size) {
	 this.size=a_size;
	 //define the stuck size
	 this.StuckArray=new Array(this.size);	 
	 this.currentIndex = 0;
	 
	 //add an item to the begining of the stuck. If stuck is full, pop out the oldest item

	 this.add = function(item){
	  if (this.StuckArray.length>this.size)
	  {
	   this.StuckArray.pop();
	  }
	  this.StuckArray.unshift(String(item));
	 };
	 
	 //finds if item exists
	 this.find = function(item){
	  var s_item=String(item);
	  for (var i=0;i<this.size;i++)
	  {
	   if(s_item==this.StuckArray[i])
	   {
	   return true;
	   }
	  }
	  return false;
	 };
	 
	 //toString implemetation
	 this.toString=function(){return this.StuckArray.toString()};
	 

	}
	
	var MAX_UNESCAPE_ITERATIONS =5;
	
	function unescape_me(data){
		
		var mdata=String(data);
		var udata=String('');
		for (var i=0;i<MAX_UNESCAPE_ITERATIONS;i++){
		
			udata=AVG_Unescape(mdata);
			if (udata.length==mdata.length){ break; }
			mdata=udata;
		
		}
		return udata;
			
	}
	
}

AVG();
