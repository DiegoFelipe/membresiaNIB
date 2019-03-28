import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Example from './Example'
import CreateMembro from './CreateMembro'

class App extends Component {
    render() {
        return (
					<>
					
          <BrowserRouter>
						<div>
							<Switch>
								<Route exact path='/' component={Example} />
								<Route path='/create' component={CreateMembro} />
							</Switch>
						</div>
					</BrowserRouter>
					</>
        )
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
