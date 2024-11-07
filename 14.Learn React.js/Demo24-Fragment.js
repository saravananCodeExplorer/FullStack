import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Fragment in React Js
class ReactFragemnt extends React.Component
{
    
render()
{
     return (
   
        <>
            <h2>hello Fragment</h2>
            <p>isysway Thanjavur</p>
     </>
    )
}
}
ReactDOM.render(<ReactFragemnt/>,document.getElementById('root'));