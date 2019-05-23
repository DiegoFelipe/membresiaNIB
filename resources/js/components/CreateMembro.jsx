import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Form from 'react-bootstrap/Form'
import Container from 'react-bootstrap/Container'
import Row from 'react-bootstrap/Row'
import Col from 'react-bootstrap/Col'
import Button from 'react-bootstrap/Button'
import Select from 'react-select'
window.axios = require('axios');

export default class CreateMembro extends Component {

  constructor(props) {
    super(props)
    this.state = {mem_nome: '', mem_data_nascimento: '', selectedOption: null, opcoes: []}

    this.handleFormInput = this.handleFormInput.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
    this.handleChange = this.handleChange.bind(this)
  }

  getHostName() {
    return `http://${window.location.hostname}`
  }


  componentDidMount() {

    axios.get(`${this.getHostName()}/get-all-ministerios`).then((res) => {

      let response = []

      res.data.map(r => {
        let resp = []
        resp.value = r.min_nome
        resp.label = r.min_descricao

        response.push(resp);
      })

      this.setState({ opcoes: response})
    })
  }

    handleChange(selectedOption) {
     this.setState({ selectedOption });
     console.log(selectedOption)
    }

    handleSubmit(event) {
    event.preventDefault()

    const dataForm = {
      mem_nome : this.state.mem_nome,
      mem_data_nascimento : this.state.mem_data_nascimento,
      selectedOption: this.state.selectedOption
    }
    console.log(this.state.selectedOption)

    axios.post(`${this.getHostName()}/membros`, dataForm).then((response) => {
      console.log(response.data)
    }).catch((error)=>{
       console.log(error)
    })
  }

  handleFormInput(event) {
    this.setState({
      [event.target.id]: event.target.value
    })

    console.log2(event.target.id+'--'+event.target.value)
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
                        id="minid"
                        name="asdasd89NAMEEE"
                        ref="refsid"
                        inputId={"minresss"}
                        inputId="ministerios"
                        controlId="sdasd78gd"
                        isMulti={true}
                        labelKey="labelkeu"
                        isSearchable={true}
                        value={this.state.selectedOption}
                        onChange={this.handleChange}
                        options={this.state.opcoes}
                        placeholder="Selecione o(s) ministério(s)">
                      </Select>
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
