import $ from 'jquery'

class NavigationMain extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$buttonAbout = $('.logo', this)
    this.$about = $('.about', this)
  }

  bindFunctions () {
    this.showAbout = this.showAbout.bind(this)
  }

  bindEvents () {
    this.$buttonAbout.on('click', this.showAbout)
  }

  showAbout (e) {
    this.$about.toggle()
  }
}

window.customElements.define('flynt-navigation-main', NavigationMain, { extends: 'nav' })
