import styled from "styled-components";

export const PStyled = styled.p`
    color: ${props => props.color ? props.color : ''};
    text-align: center;
    font-weight: bold;
`;
