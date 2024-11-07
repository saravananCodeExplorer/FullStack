import React, {useState} from 'react';
import ReactDOM from 'react-dom';

function ReactHooks() 
{
   const [count,updatecount] = useState(0);
   return (
      <div>
         <p> You clicked the above button {count}  times </p>
         <button onClick={() => updatecount(count + 1)}> 
         Clickme
         </button>
      </div>
   );
}
ReactDOM.render(<ReactHooks/>,document.getElementById('root')) 
