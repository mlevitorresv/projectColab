import React, { useEffect, useState } from 'react'
import { BackgroundStyled } from '../../components/BackgroundStyled'
import { ProjectDivStyled } from '../../components/ProjectdivStyled'
import { ProjectOptionsStyled } from '../../components/ProjectOptionsStyled'
import { CiCirclePlus } from "react-icons/ci";


export const ProjectsPage = () => {

  const [error, setError] = useState(null)
  const [isLoaded, setIsLoaded] = useState(false)
  const [items, setItems] = useState([])

  useEffect(() => {
    fetch('http://localhost:8000/api/products')
      .then(res => res.json())
      .then(
        (result) => {
          setIsLoaded(true)
          setItems(result)
        },

        (error) => {
          setIsLoaded(true)
          setError(error)
        }
      )

      console.log(items)

  }, [isLoaded, items])

  if (error) {
    return <BackgroundStyled display="start" align="start">Error: {error.message}</BackgroundStyled>
  } else if (!isLoaded) {
    return <BackgroundStyled display="start" align="start">Loading...</BackgroundStyled>
  } else {
    return (
      <BackgroundStyled display="start" align="start">
        <ProjectDivStyled>
          <ProjectOptionsStyled>
            <CiCirclePlus />
          </ProjectOptionsStyled>
        </ProjectDivStyled>
        {
          items.map(item => {
            <ProjectDivStyled>
              <ProjectOptionsStyled>
                {item.name}
              </ProjectOptionsStyled>
            </ProjectDivStyled>
          })
        }
      </BackgroundStyled>
    )
  }

}
