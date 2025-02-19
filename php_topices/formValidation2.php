<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <form>

        <fieldset>
            <legend>
                Do you have a driver's license?<span aria-label="required">*</span>
            </legend>
            <input type="radio" required name="driver" id="r1" value="yes" /><label
                for="r1">Yes</label>
            <input type="radio" required name="driver" id="r2" value="no" /><label
                for="r2">No</label>
        </fieldset>
        <p>
            <label for="n1">How old are you?</label>
            <input type="number" min="12" max="120" step="1" id="n1" name="age" />
        </p>
        <p>
            <label for="t1">What's your favorite fruit?<span aria-label="required">*</span></label>
            <input
                type="text"
                id="t1"
                name="fruit"
                list="l1"
                required
                pattern="[Bb]anana|[Cc]herry|[Aa]pple|[Ss]trawberry|[Ll]emon|[Oo]range" />
            <datalist id="l1">
                <option>Banana</option>
                <option>Cherry</option>
                <option>Apple</option>
                <option>Strawberry</option>
                <option>Lemon</option>
                <option>Orange</option>
            </datalist>
        </p>
        <p>
            <label for="t2">What's your email address?</label>
            <input type="email" id="t2" name="email" />
        </p>
        <p>
            <label for="t3">Leave a short message</label>
            <textarea id="t3" name="msg" maxlength="140" rows="5"></textarea>
        </p>
       
        <div>
            <button>Submit</button>
    </form>
</body>

</html>
<style>
    *{
        /* text-align: center; */
            /*  mt  mr  mb  ml */
        margin:0px 20px -2px 100px;
    }
    form {
        font: 1em sans-serif;
        max-width: 320px;
    }
    
    p > label {
        display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    textarea,
    fieldset {
        width: 100%;
        border: 1px solid #333;
        box-sizing: border-box;
    }
    
    input:invalid {
        box-shadow: 0 0 5px 1px red;
    }
    
    input:focus:invalid {
        box-shadow: none;
    }
    
</style>