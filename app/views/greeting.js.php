/**
 * Ajax Helper
 *
 */
!function(){var t=function(t){return this.running=0,this.concurrency=t,this.taskQueue=[],this};t.prototype.add=function(t,e,s){this.running<this.concurrency?this._runTask(t,e,s):this._enqueueTask(t,e,s)},t.prototype.next=function(){if(this.running--,this.taskQueue.length>0){var t=this.taskQueue.shift();this._runTask(t.callback,t._this,t._args)}},t.prototype._runTask=function(t,e,s){this.running++,t.apply(e,s)},t.prototype._enqueueTask=function(t,e,s){this.taskQueue.push({callback:t,_this:e,_args:s})};var e=new t(1),s=function(){return this._settings={url:"",async:!0,headers:{"Content-Type":"application/x-www-form-urlencoded",Accepts:"text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","Cache-Control":"no-cache",Pragma:"no-cache"}},this._complete=!1,this._success=!1,this._error=!1,this};s.prototype.post=function(t,n,r,i,a,o){var c=new s;return e.add(c._call,c,c._normaliseArgs("POST",t,n,r,i,a,o)),c},s.prototype.get=function(t,n,r,i,a,o){var c=new s;return e.add(c._call,c,c._normaliseArgs("GET",t,n,r,i,a,o)),c},s.prototype.head=function(t,n,r,i,a,o){var c=new s;return e.add(c._call,c,c._normaliseArgs("HEAD",t,n,r,i,a,o)),c},s.prototype.put=function(t,n,r,i,a,o){var c=new s;return e.add(c._call,c,c._normaliseArgs("PUT",t,n,r,i,a,o)),c},s.prototype.delete=function(t,n,r,i,a,o){var c=new s;return e.add(c._call,c,c._normaliseArgs("DELETE",t,n,r,i,a,o)),c},s.prototype.success=function(t){if(!this._isFunc(t))throw Error('Error the provided argument "'+JSON.parse(t)+'" is not a valid callback');return this._success=t,this},s.prototype.error=function(t){if(!this._isFunc(t))throw Error('Error the provided argument "'+JSON.parse(t)+'" is not a valid callback');return this._error=t,this},s.prototype.then=function(t){return this.complete(t)},s.prototype.complete=function(t){if(!this._isFunc(t))throw Error('Error the provided argument "'+JSON.parse(t)+'" is not a valid callback');return this._complete=t,this},s.prototype.upload=function(t,e,s,n,r,i,a){var o=new FormData;for(var c in e)if(e.hasOwnProperty(c)){var u=e[c];u.type?o.append(c,u,u.name):o.append(c,u)}xhr=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP"),e&&(e=this._params(e)),xhr.requestURL=t,xhr.method="POST",this.isFunction(r)&&xhr.upload.addEventListener("loadstart",r,!1),this.isFunction(i)&&xhr.upload.addEventListener("progress",i,!1),this.isFunction(a)&&xhr.upload.addEventListener("load",a,!1),xhr.addEventListener("readystatechange",function(t){t=t||window.event;try{a=t.target.readyState,i=t.target.responseText,r=t.target.status}catch(e){return}if(4==a){if(r>=200&&r<300||304===r){var r,i,a,o=t.target.responseText;_this.isFunction(s)&&s(o)}else _this.isFunction(n)&&n.call(r,xhr)}},!1),xhr.open("POST",t,!0),xhr.setRequestHeader("REQUESTED-WITH","XMLHttpRequest"),xhr.send(o)},s.prototype._call=function(t,e,s,n,r,i,a){xhr=window.XMLHttpRequest?new XMLHttpRequest:new ActiveXObject("Microsoft.XMLHTTP"),this._xhr=xhr,xhr.requestURL=e,xhr.mthod=t,xhr.open(t,e,this._settings.async),this._sendHeaders(xhr,a);var o=this;return this._settings.async?(xhr.onreadystatechange=function(){o._ready.call(o,xhr,n,r,i)},xhr.send(s)):(xhr.send(s),this._ready.call(this,xhr,n,r,i)),this},s.prototype._sendHeaders=function(t,e){for(var s in"POST"===t.mthod&&(this._settings.headers["REQUESTED-WITH"]="XMLHttpRequest"),this._isObj(e)&&(this._settings.headers=Object.assign({},this._settings.headers,e)),this._settings.headers)this._settings.headers.hasOwnProperty(s)&&t.setRequestHeader(s,this._settings.headers[s])},s.prototype._normaliseArgs=function(t,e,s,n,r,i,a){var i=void 0===i?"false":i;return this._isFunc(s)&&(i=s,this._isFunc(n)&&(a=n),n=!1,r=!1),"POST"!==t?this._isObj(s)&&!this._isEmpty(s)&&(e+=e.includes("?")?"&":"?",e+=this._params(s),s=null):this._isObj(s)&&!this._isEmpty(s)&&(s=this._params(s)),[t,e,s,n,r,i,a]},s.prototype._ready=function(t,s,n,r){if(4==t.readyState){var i=!1;if(t.status>=200&&t.status<300||304===t.status){i=!0;var a=t.responseText;this._isFunc(s)&&s.call(t,a),this._success&&this._success.call(t,a)}else{i=!1;let o=t.responseText?t.responseText:t.response;this._isFunc(n)&&n.call(t,o),this._error&&this._error.call(t,o)}let c=t.responseText?t.responseText:t.response;this._isFunc(r)&&r.call(t,c,i),this._complete&&this._complete.call(t,c,i),e.next()}},s.prototype._isEmpty=function(t){return t&&0===Object.keys(t).length&&t.constructor===Object},s.prototype._isFunc=function(t){return"[object Function]"===Object.prototype.toString.call(t)},s.prototype._isObj=function(t){return"[object Object]"===Object.prototype.toString.call(t)},s.prototype._params=function(t){var e=[];for(var s in t)e.push(encodeURIComponent(s)+"="+encodeURIComponent(t[s]));return e.join("&")},window.Ajax=s}();

(function()
{
    /**
     * List of tests.
     *
     * @var array
     */
    const testsArray = <?php echo json_encode(array_map(function($value)
    {
        return str_replace('.php', '', substr($value, strrpos($value, '/') + 1));

    }, $serve->Filesystem->rglob(dirname(SERVE_APPLICATION_PATH) . '/tests/*.php'))); ?>;

    /**
     * Tests runner.
     *
     */
    var TestsRunner = function()
    {
        /**
         * Results Wrapper el.
         *
         * @var HtmlElement
         */
        this._resultwrapper = document.querySelector('.js-unit-test-wrapper');

        /**
         * First line el.
         *
         * @var HtmlElement
         */
        this._firstLineEl = document.querySelector('.js-unit-test-wrapper .line');

        /**
         * Tests to skip.
         *
         * @var array
         */
        this._testsToSkip = ['bootstrap', 'testcase', 'four', 'two'];

        /**
         * Total tests.
         *
         * @var int
         */
        this._testsCount = 0;

        /**
         * Total assertions.
         *
         * @var int
         */
        this._assertionCount = 0;

        /**
         * Tests running with line node.
         *
         * @var array
         */
        this._errorCount = 0;

        /**
         * Tests running with line node.
         *
         * @var array
         */
        this._dotsIntervals = [];

        /**
         * Running interval to insert dots on first line.
         *
         * @var setInterval
         */
        this._runningInterval = null;

        // Run the first test
        this._runTest(0);

        return this;
    };

    /**
     * Converts CamelCase to spaces
     *
     * @param  string text Text to convert
     * @return string
     */
    TestsRunner.prototype._camel2Words = function(text)
    {
        const result = text.replace(/([A-Z])/g, " $1");

        return result.charAt(0).toUpperCase() + result.slice(1);
    }

    /**
     * Inserts dots into running line text.
     *
     * @param  string text Text to convert
     */
    TestsRunner.prototype._addDotToLine = function(line)
    {
        line.querySelector('.js-line-text').innerHTML += '.';
    }

    /**
     * Clears timeout of dots into running line text.
     *
     * @param  string text Text to convert
     * @return string
     */
    TestsRunner.prototype._clearDotTimeout = function(line)
    {
        for (var i = this._dotsIntervals.length - 1; i >= 0; i--)
        {
            var lineObj = this._dotsIntervals[i];

            if (lineObj.node === line)
            {
                clearInterval(lineObj.interval);

                break;
            }
        }
    }

    /**
     * Starts a test.
     *
     * @param  string name Test name
     * @return HtmlElement
     */
    TestsRunner.prototype._startTest = function(name)
    {
        let _this = this;

        let line = document.createElement('div');

        line.className = 'line loading';

        line.innerHTML = '<span class="line-text js-line-text">Running ' + this._camel2Words(name).replace('Test', 'tests') + '......</span>';

        this._resultwrapper.appendChild(line);

        let intervalID = window.setInterval(function()
        {
            _this._addDotToLine(line);

        }, 100);

        this._dotsIntervals.push({node : line, interval : intervalID});

        return line;
    }

    /**
     * Completes a test.
     *
     * @param  string      response  Response text from Ajax
     * @param  HtmlElement line      Target line
     * @return HtmlElement
     */
    TestsRunner.prototype._completeTest = function(response, line)
    {
        line.classList.remove('loading');

        this._clearDotTimeout(line);

        const success = response.match(/OK \([^\)]+\)/);
        
        const result     = document.createElement('div');
        result.className = 'line';

        const lbreak      = document.createElement('div');
        lbreak.className  = 'line';
        lbreak.innerHTML  = '&nbsp;'

        if (success && success[0])
        {
            result.innerHTML = '✓ Success: ' + success[0];
            result.className += ' success';
        }
        else
        {
            result.innerHTML = '✘ Error: ' + response.replace(/\n\n/, "\n");
            result.className += ' error';
        }

        // Add the counted tests
        let testsCount = response.match(/\d+ tests|Tests: \d+/);

        if (testsCount)
        {
            this._testsCount += parseInt(testsCount[0].replace(' tests', '').replace('Tests:', '').trim());
        }

        // Add the counted assertions
        let assertionCount = response.match(/\d+ assertions|Assertions: \d+/);

        if (assertionCount)
        {
            this._assertionCount += parseInt(assertionCount[0].replace(' assertions', '').replace('Assertions:', '').trim());
        }

        // Add the counted errors
        let errorsCount = response.match(/\d+ errors|Errors: \d+/);

        if (errorsCount)
        {
            this._errorCount += parseInt(errorsCount[0].replace(' errors', '').replace('Errors:', '').trim());
        } 
        
        line.parentNode.insertBefore(result, line.nextSibling);

        line.parentNode.insertBefore(lbreak, result.nextSibling);
    }

    /**
     * All tests are complete.
     *
     */
    TestsRunner.prototype._completedAllTests = function()
    {
        clearInterval(this._runningInterval);

        let firstLineText = this._firstLineEl.querySelector('.js-line-text');

        let summaryText = 'Tests complete! Ran ' + this._testsCount + ' tests, with ' + this._assertionCount + ' assertions & ' + this._errorCount + ' error' + (this._errorCount === 1 ? '' : 's') + '.' ;

        this._firstLineEl.classList.remove('loading');

        firstLineText.innerHTML = summaryText;

        let lastLine = document.createElement('div');

        lastLine.className = 'line';

        lastLine.innerHTML = summaryText;

        this._resultwrapper.appendChild(lastLine);
    }

    /**
     * Runs test by index.
     *
     * @param int  index Test index to run
     */
    TestsRunner.prototype._runTest = function(index)
    {
        let testName = testsArray[index];

        let _this = this;

        if (!testName)
        {
            this._completedAllTests();
        }
        else if (this._testsToSkip.includes(testName.toLowerCase()))
        {
            setTimeout(function()
            {
                _this._runTest(index + 1);

            }, 50);
        }
        else
        {
            // Start first test
            if (!this._runningInterval)
            {
                this._runningInterval = window.setInterval(function()
                {
                    _this._addDotToLine(_this._firstLineEl);

                }, 500);
            }

            let line = this._startTest(testsArray[index]);

            const _Ajax = new Ajax;

            _Ajax.post('/', {name : testName}, function success(response)
            {
                let responseObj = JSON.parse(response);

                setTimeout(function()
                {
                    _this._completeTest(responseObj.details, line);

                    _this._runTest(index + 1);
                    
                }, 50);
            },
            function error(response)
            {
                _this._completeTest(response, line);

                _this._runTest(index + 1);
            });
        }
    }

    const runner = new TestsRunner();
   
})();

