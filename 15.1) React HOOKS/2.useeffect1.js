import React from 'react';
import { useEffect ,useState} from 'react';


//step 1, 2,3
const Useefect = () => {
  const [count,setCount] = useState(0);

  const [changevalue,setChangevalue] = useState(10);
  



  useEffect(()=>{
    document.title =`${changevalue} New Massage`;
  },[changevalue])
  function clickedMe (){
    setCount(count+10);
  }


  return (
    <div>
      <h2>The value is:{count}</h2>
      <button onClick={clickedMe}>Click</button>

      <h2>The value is:{changevalue}</h2>
      <button onClick={()=>setChangevalue(changevalue+10)}>Clicked</button>

    </div>
  )
}

export default Useefect;
