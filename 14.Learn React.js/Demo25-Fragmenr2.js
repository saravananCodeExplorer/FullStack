import React from 'react';
import ReactDOM from 'react-dom';
import './App.css'
//Example for Fragment in React Js
class ReactFragemnt extends React.Component
{
render()
{
     return (
   <table>
       <tr>
           <Rowcreation></Rowcreation>
       </tr>
   </table>
      
    )
}
}
class Rowcreation extends React.Component
{
    render()
    {
        return(
                <>
                    <td>hi</td>
                    <td>bye</td>
               </>

        )
    }
}
ReactDOM.render(<ReactFragemnt/>,document.getElementById('root'));