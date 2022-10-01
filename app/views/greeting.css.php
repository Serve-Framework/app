/* RESET */
html{color:#000;background:#FFF}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}q:before,q:after{content:''}abbr,acronym{border:0;font-variant:normal}sup{vertical-align:text-top}sub{vertical-align:text-bottom}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;*font-size:100%}legend{color:#000}#yui3-css-stamp.cssreset{display:none}

/* HTML/BODY */
*, :after, :before
{
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
html
{
   	font-size: 62.5%;
}
body
{
    font-family: "Helvetica Neue", Helvetica, -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
	font-size: 1.45rem;
}
html,body
{
	background: #3f3f3f;
    color: #c8c8c8;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* TYPOGRAPHY */
p
{
	margin: 1em 0;
	padding: 0;
}
a
{
    color: rgb(17, 85, 204);
    text-decoration: none;
}
strong
{
	font-weight: 600;
}
h1, h2, h3, h4, h5, h6
{
	margin-bottom: 16px;
	font-weight: normal;
}
h1
{
    font-size: 3rem;
}
h2
{
    font-size: 2rem;
}
h3
{
    font-size: 1.8rem;
}
h4
{
    font-size: 1.6rem;
}
h5
{
    font-size: 1.4rem;
}
h6
{
    font-size: 1.3rem;
}

/* BUTTON */
button,
.button
{
  background: #c942ff;
  border: 0;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: .875em;
  margin: 0;
  padding: 10px 12px;
  transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
  font-weight: bold;
  user-select: none;
  margin-right: 5px;
}
button:hover,
.button:hover
{
  box-shadow: 0 1px 3px rgba(0, 0, 0, .50);
}
button:active,
.button:active
{
  background: #8a2caf;
  outline: 0;
  box-shadow: none;
}

/* LAYOUT */
.row
{
	width: 100%;
	display: block;
	padding-top: 15px;
	padding-bottom: 15px;
}
.row:after
{
  content: "";
  display: table;
  clear: both;
}		
.page-wrapper
{
	width: 100%;
	max-width: 680px;
    padding-top: 100px;
    margin: 0 auto;
    margin-bottom: 90px;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 10px;
}

/* LOGO/TITLE */
.logo
{
    width: 60px;
    height: 60px;
    display: block;
    display: inline-block;
    vertical-align: middle;
}
.title
{
	display: inline-block;
	margin-bottom: 0;
	vertical-align: middle;
}
.desc
{
    font-size: 1.3rem;
}

/* TEST RESULTS  */
.test-results
{
	font-family: Menlo,Monaco, Consolas, "Courier New", monospace;
    line-height: 1.8;
    font-size: 1.3rem;
    -webkit-font-smoothing: initial;
    -moz-osx-font-smoothing: initial;
	color: #ffffff;
    background: #27242b;
    border-radius: 3px;
    padding: 20px 0;
    margin: 10px 0;
	display: block;
}
.test-results .line
{
	position: relative;
	width: 100%;
	padding-left: 15px;
}
.test-results .line-text
{
	color: #ffffff;
}
.test-results .line.success
{
	color: #00ffac;
	padding-left: 25px;
}
.line.error
{
	color: #ff4040;
	padding-left: 25px;
	white-space: break-spaces;
}

/* LOADING SPINNER  */
.spinner
{
	-webkit-animation: rotator 1.4s linear infinite;
	animation: rotator 1.4s linear infinite;
	position: absolute;
	width: 20px;
    right: 20px;
    top: -20px;
    display: none;
}
.test-results .line.loading .spinner
{
	display: block;
}
@-webkit-keyframes rotator
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(270deg);
	}
}
@keyframes rotator
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(270deg);
	}
}
@-webkit-keyframes dash
{
	0%
	{
		stroke-dashoffset: 187;
	}
	50%
	{
		stroke-dashoffset: 46.75;
		transform: rotate(135deg);
	}
	100%
	{
		stroke-dashoffset: 187;
		transform: rotate(450deg);
	}
}
@keyframes dash
{
	0%
	{
		stroke-dashoffset: 187;
	}
	50%
	{
		stroke-dashoffset: 46.75;
		transform: rotate(135deg);
	}
	100%
	{
		stroke-dashoffset: 187;
		transform: rotate(450deg);
	}
}
.path
{
	stroke-dasharray: 187;
	stroke-dashoffset: 0;
	transform-origin: center;
	-webkit-animation: dash 1.4s ease-in-out infinite;
	animation: dash 1.4s ease-in-out infinite;
}
