import styled from "styled-components"


export const BackgroundStyled = styled.main`
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: ${props => props.display ? props.display : 'space-around'};
    align-items: ${props => props.display ? props.align : 'center'};
    height: 100vh;
`