import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

export default class Example extends Component {
    render() {
        return (
            <div className="container">

  <Link className='btn btn-primary btn-sm mb-3' to='/create'>
                 Criar Novo Membro
               </Link>

            </div>
        );
    }
}
