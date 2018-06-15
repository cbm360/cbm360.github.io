import React, { Component } from 'react'

class Nav extends Component {
  render() {
    return (
      <nav className="header">
        <img src={logo} className="header-logo" alt="logo" />
        <h1 fclassName="header-title">Camron Moore</h1>
        <h2 className="header-certifications">CSP-SM, CSP-PO</h2>
      </nav>
    )
  }
}

export default Nav
