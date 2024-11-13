// src/props/Child.js
import React from 'react';

function ChildComponent({Data}) {
  return (
    <div>
      <h2>Child Component</h2>
      <p>{Data}</p>
    </div>
  );
}

export default ChildComponent;
