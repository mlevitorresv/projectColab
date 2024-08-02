import React, { useEffect, useReducer, useRef, useState } from 'react'
import { BackgroundStyled } from '../../components/BackgroundStyled';
import { FormStyled } from '../../components/FormStyled';
import { PStyled } from '../../components/PStyled';
import { TitleStyled } from '../../components/TitleStyled';
import { InputStyled } from '../../components/InputStyled';
import { ButtonStyled } from '../../components/ButtonStyled';
import { useNavigate } from 'react-router-dom';

export const HomePage = () => {

  const [error, setError] = useState(null)
  const [isLoaded, setIsLoaded] = useState(false)
  const [items, setItems] = useState([])

  const navigate = useNavigate();

  const logEmail = useRef()
  const logPass = useRef()

  const regName = useRef()
  const regEmail = useRef()
  const regPass = useRef()

  const handleLogin = async (e) => {
    e.preventDefault()

    const email = logEmail.current.value
    const pass = logPass.current.value

    try {
      const response = await fetch('http://localhost:8000/api/users', {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json',
        },
      });

      if (!response.ok) {
        throw new Error('Failed to fetch users');
      }

      const data = await response.json();
      setItems(data);
      setIsLoaded(true);
    } catch (error) {
      setError(error.message);
    }
    
    let user = items.find( user => user.email == email)

    if (user) navigate('/projects')
  }




const handleRegister = (e) => {
  e.preventDefault()

  const name = regName.current.value
  const email = regEmail.current.value
  const pass = regPass.current.value

  const requestMetaData = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(
      {
        name: name,
        email: email,
        password: pass
      }
    )
  }

  const result = fetch("http://localhost:8000/api/users", requestMetaData)
    .then(res => res.json())

  navigate('/projects')
}

return (
  <BackgroundStyled>
    <FormStyled onSubmit={handleLogin}>
      <TitleStyled>ProjectColab</TitleStyled>
      <PStyled>Inicia Sesión</PStyled>

      <InputStyled type='email' placeholder='Email' ref={logEmail} required />
      <InputStyled type='password' placeholder='password' ref={logPass} required />

      <ButtonStyled type='submit'>Iniciar Sesión</ButtonStyled>
      <PStyled color='red'>¿has olvidado la contraseña?</PStyled>
    </FormStyled>


    <FormStyled onSubmit={handleRegister}>
      <TitleStyled>ProjectColab</TitleStyled>
      <PStyled>¿Aún no tienes una cuenta? Creala</PStyled>

      <InputStyled type='text' placeholder='Name' ref={regName} required />
      <InputStyled type='email' placeholder='Email' ref={regEmail} required />
      <InputStyled type='password' placeholder='password' ref={regPass} required />

      <ButtonStyled type='submit'>Crear Cuenta</ButtonStyled>
    </FormStyled>
  </BackgroundStyled>
)
}
