import { BrowserRouter, Route, Routes } from 'react-router-dom'
import { HomePage } from './pages/home/HomePage'
import { ProjectOnePage } from './pages/projects/ProjectOnePage'
import { ProjectsPage } from './pages/projects/ProjectsPage'
import { UserPage } from './pages/users/UserPage'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<HomePage />} />
        <Route path='/projects' element={<ProjectsPage />} />
        <Route path='/projects/:id' element={<ProjectOnePage />} />
        <Route path='/user/:id' element={<UserPage />} />

      </Routes>
    </BrowserRouter>
  )
}

export default App
