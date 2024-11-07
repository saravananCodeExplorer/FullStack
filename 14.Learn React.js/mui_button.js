import * as React from 'react';
import ReactDOM from 'react-dom';
import Stack from '@mui/material/Stack';
import Button from '@mui/material/Button';




export default function BasicButtons() {
  return (
    <Stack spacing={2} direction="row">
      <Button variant="text">Text</Button>
      <Button variant="contained">Contained</Button>
      <Button variant="outlined">Outlined</Button>
    </Stack>
  );
}



ReactDOM.render(<BasicButtons/>,document.getElementById('root'));
