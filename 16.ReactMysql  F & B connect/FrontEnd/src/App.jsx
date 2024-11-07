
import { useEffect, useState } from "react";
import './App.css';
import React from "react";
import State from "./Components/Usestate";
import GangaComponent from "./Components/Ganga";
// import Effect from "./Components/Useeffect";  


function App() {

  // // Step 7: Initialize state to hold data
  const[data,setData] = useState([]);


// Step 6: Fetch data from API and update state
useEffect(()=>{
  fetch('http://localhost:8080/staf')
  .then(res => res.json())
  .then(data => setData(data))
  .catch(err => console.log(err));

},[]);


 
  return (
    <>
    <State/>
    {/* <Effect/> */}
    <GangaComponent/>



 <div>

    <table>

      <tr>
        
          <th>ID</th>
          <th>NAME</th>
          <th>AGE</th>
          <th>ADDRESS</th>
          <th>SALARY</th>
        
      </tr>
      <tbody>
       {data.map((d ,i)=>(
        <tr key={i}>
          <td>{d.id}</td>
          <td>{d.name}</td>
          <td>{d.age}</td>
          <td>{d.address}</td>
          <td>{d.salary}</td>

        </tr>
       ))}
      </tbody>
    </table>
    
  </div> 
    </>
  )
}


export default App


