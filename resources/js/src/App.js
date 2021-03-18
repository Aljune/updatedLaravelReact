import React from 'react'
import ReacDOM from 'react-dom'
import {
    BrowserRouter as Router,
    Route,
    Link,
    Switch
} from 'react-router-dom'
import  Index from './components/index'
import  AddUser from './components/add'

const App = () => {
    return (
        <Router className="App__container">
            <Switch>
                <Route exact path="/" > 
                    <Index />
                </Route>
                <Route exact path="/add" > 
                    <AddUser />
                </Route>
            </Switch>
        </Router>
    )
}

// export default App
ReacDOM.render(<App/>, document.getElementById('app'))
