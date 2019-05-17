import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Form from 'react-bootstrap/Form'
import Container from 'react-bootstrap/Container'
import Row from 'react-bootstrap/Row'
import Col from 'react-bootstrap/Col'
import Button from 'react-bootstrap/Button'
import Select from 'react-select'

const options = []

export default class CreateMembro extends Component {

  constructor(props) {
    super(props)
    this.state = {mem_nome: '', mem_data_nascimento: '', selectedOption: null, opcoes: null}

    this.handleFormInput = this.handleFormInput.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
    this.handleChange = this.handleChange.bind(this)
  }


  componentDidMount() {
    axios.get('https://jsonplaceholder.typicode.com/users').then(res => {
      console.log(res.data)
      this.setState({ opcoes: res.data})
    })
  }


  handleChange(selectedOption) {
   this.setState({ selectedOption });
   console.log(`Option selected:`, selectedOption);
 }

  handleSubmit(event) {
    event.preventDefault()

    const dataForm = {
      mem_nome : this.state.mem_nome,
      mem_data_nascimento : this.state.mem_data_nascimento
    }

    var uri = 'http://membresia/membros'
    axios.post(uri, dataForm).then((response) => {
      console.log(response.data)
    }).catch((error)=>{
       console.log(error)
    })
  }

  handleFormInput(event) {
    this.setState({
      [event.target.id]: event.target.value
    })

    console.log(event.target.id+'--'+event.target.value)
  }

    render() {
        return (
          <Container>
            <Row>
              <Col md={6}>
                <Form onSubmit={this.handleSubmit}>
                  <Form.Group>
                    <Form.Label>Nome do Membro</Form.Label>
                  <Form.Control id="mem_nome" type="text" placeholder="Nome do Membro" onChange={this.handleFormInput} />

                    <Form.Label>Data de Nascimento</Form.Label>
                    <Form.Control id="mem_data_nascimento" type="date" placeholder="Data de Nascimento" onChange={this.handleFormInput}/>


                    <Form.Label >Ministérios</Form.Label>

                      <Select
                        isMulti={true}
                        value={this.state.selectedOption}
                        onChange={this.handleChange}
                        options={options}
                        placeholder="Selecione o(s) ministério(s)"
                      />
                  </Form.Group>



                  <Button type="submit" variant="primary">
                    Enviar
                  </Button>
                </Form>
              </Col>
            </Row>
          </Container>

        );
    }
}
