import { useState } from 'react';
import './App.css';
import bmi1 from './images/bmi1.jpeg'
import bmi2 from './images/bmi2.jpeg'
import bmi3 from './images/bmi3.jpeg'
import bmi4 from './images/bmi4.jpeg'
import bmi5 from './images/bmi5.jpeg'


function App() {

  const [userInfo, setUserInfo] = useState({w: 0, h: 0})
  const [bmi, setBmi] = useState('')
  const [image, setImage] = useState('')
  const handleChange = ({target}) => {
    setUserInfo({...userInfo, [target.name]: target.value})
  }

  const calc = () => {
    if(userInfo.w <= 0 || userInfo.h <= 0) {
      setBmi('')
      setImage('')
      return
    } 
    const BMI = userInfo.w / (userInfo.h ** 2)
    setBmi(BMI)
    if(BMI < 18.5) setImage(bmi1)
    else if(BMI >= 18.5 && BMI < 25) setImage(bmi2)
    else if(BMI >= 25 && BMI < 30) setImage(bmi3)
    else if(BMI >= 30 && BMI < 35) setImage(bmi4)
    else setImage(bmi5)
    
  }

  return (
    <div className="App">

      <div className='form-container'>
        <h2>Calculate Your BMI</h2>
        <br />
        <div>
          <label htmlFor="w">Weight</label>
          <br />
          <input type='number' name='w' value={userInfo.w} onChange={handleChange} />
        </div>
        <div>
          <label htmlFor="h">Height</label>
          <input type='number' name='h' value={userInfo.h} onChange={handleChange} />
        </div>
        <input type='button' value={'Calculate'} onClick={calc} />
        <p>BMI = {bmi}</p>
      </div>

      <div className='image-container'>
        { image && <img alt='pic' src={image} /> }
      </div>
      
    </div>
  );
}

export default App;
