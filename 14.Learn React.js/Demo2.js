import React from 'react';
import ReactDOM from 'react-dom';
/*import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';*/
class Demo
{
	
  Add()
  {
    var a=10;
    var b=20;
    var c=a+b;
    document.getElementById('root').innerHTML=c;
	   
  }
  

 sub()
  {
	  
    var a=10;
    var b=20;
    var c=a-b;
    document.getElementById('root').innerHTML=c;
	
  }
  
}
var mydemo=new Demo();
mydemo.Add();
mydemo.sub();