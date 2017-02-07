console.log('Hello world!');
    alert('index.html')

var value = null, 
    type = null;
    // , insteat of ; create a 2 variable using var only once

    value = '123';//we asign '123' into variable 'value'
    type = typeof value;//we get the type of variable'value' and asign it into variable 'type'
    console.log(type);//we output the variable 'type' (containing the type of variable'value')

    value = 123;
    type = typeof value;
    console.log(type);

    value = '123 Times Square';
    type = typeof value;
    console.log(type);

    value = 12.3;
    type = typeof value;
    console.log(type);  
    
    value = true;
    type = typeof value;
    console.log(type);  
    
    value = 'true';
    type = typeof value;
    console.log(type);  
    
    value = [1, 2, 3];
    type = typeof value;
    console.log(type);  
    
    value = { foo: 'bar' };
    type = typeof value;
    console.log(type);

    value = document;
    type = typeof value;
    console.log(type);

    var message_element = document.getElementById('message');// in jquery you will write it like this : var message_element = $('#message')
    console.log(message_element.innerHTML);
    console.log(typeof message_element);
    message_element.innerHTML = 'New Text'
    console.log(message_element.innerHTML)

var change
console.log('change message');
