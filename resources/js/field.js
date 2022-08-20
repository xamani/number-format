import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-number-format', IndexField)
  app.component('detail-number-format', DetailField)
  app.component('form-number-format', FormField)
})
