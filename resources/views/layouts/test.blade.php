<label class="switch">
    <input type="checkbox" onclick="myFunction()" class="checkbox" />
    <div class=""></div>
</label>
<style>
    * {
        box-sizing: border-box;
        font-family: helvetica,arial,sans-serif;
    }

    .switch {
        opacity: 0;
    }

    .switch > div {
        width: 80px;
        height: 40px;
        background: #9A9A9A;
        z-index: 0;
        cursor: pointer;
        position: relative;
        border-radius: 50px;
        line-height: 40px;
        text-align: right;
        padding: 0 10px;
        color: rgba(0,0,0,.5);
        transition: all 250ms;
        box-shadow: inset 0 3px 15px -3px
    }

    .switch > input:checked + div {
        background: skyblue;
        text-align: left;
        color: rgba(255,255,255,.75);
    }

    .switch > div:before {
        content: '';
        display: inline-block;
        position: absolute;
        left: 0;
        top: -2px;
        height: 44px;
        width: 44px;
        background: linear-gradient(#f9f9f9 30%,#CDCDCD);
        border-radius: 50%;
        transition: all 200ms;
        box-shadow: 0 15px 15px -3px rgba(0,0,0,.25), inset 0 -2px 2px -3px,  0 3px 0 0px #f9f9f9;
    }

    .switch > div:after {
        content: '';
        display: inline-block;
        position: absolute;
        left: 11px;
        top: 11px;
        height: 22px;
        width: 22px;
        background: linear-gradient(#DCDCDC,#E3E3E3);
        border-radius: 50%;
        transition: all 200ms;
    }

    .switch > input:checked + div:after {
        left: 52px;
    }

    .switch > input:checked + div:before {
        content: '';
        position: absolute;
        left: 40px;
        border-radius: 50%;
    }
</style>

Checkbox: <input type="checkbox" id="myCheck" onclick="myFunction()">

<p id="text" style="display:none">Checkbox is CHECKED!</p>

<script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
