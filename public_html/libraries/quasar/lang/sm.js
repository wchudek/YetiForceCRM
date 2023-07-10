export default {
  isoName: 'sm',
  nativeName: 'Fa\'asāmoa',
  label: {
    clear: 'Kilia',
    ok: '\'Oukei',
    cancel: 'Fa\'alēaogāina',
    close: 'Tapuni',
    set: 'Seti',
    select: 'Filifili',
    reset: 'Toe seti',
    remove: '\'Ave\'ese',
    update: 'Fa\'afou',
    create: 'Fatu',
    search: 'Sā\'ili',
    filter: 'Fa\'amamā',
    refresh: 'Fa\'afou',
    expand: function (label) { return label ? `Fa'alautele "${label}"` : 'Faalautele' },
    collapse: function (label) { return label ? `Pa'u "${label}"` : 'Pa\'u' }
  },
  date: {
    days: 'Aso Sā_Aso Gafua_Aso Lua_Aso Lulu_Aso Tofi_Aso Faraile_Aso To\'onai'.split('_'),
    daysShort: 'Sā_Gaf_Lua_Lul_Tof_Far_Too'.split('_'),
    months: 'Ianuari_Fepuari_Mati_\'Aperila_Mē_Iuni_Iulai_\'Aokuso_Sētema_\'Oketopa_Nōvema_Tēsema'.split('_'),
    monthsShort: 'Ian_Fep_Mat_Ape_Mē_Iun_Iul_Auk_Sēt_Oke_Nōv_Tēs'.split('_'),
    firstDayOfWeek: 1, // 0-6, 0 - Sunday, 1 Monday, ...
    format24h: false,
    pluralDay: 'aso'
  },
  table: {
    noData: 'Lēai ni fa\'amatalaga o maua',
    noResults: 'Lēai ni fa\'amaumauga na maua',
    loading: '\'Āmatalia...',
    selectedRecords: function (rows) {
      return rows === 1
        ? '1 le laina \'ua filifilia.'
        : (rows === 0 ? 'Lēai ni' : rows) + ' laina \'ua filifilia.'
    },
    recordsPerPage: 'Laina \'i le ītūlau:',
    allRows: 'Laina \'uma',
    pagination: function (start, end, total) {
      return start + '-' + end + ' o ' + total
    },
    columns: 'Poutū'
  },
  editor: {
    url: 'Tuātusi initaneti',
    bold: 'Fa\'aolaola',
    italic: 'Fa\'api\'o',
    strikethrough: 'Kolosi',
    underline: 'Vase lalo',
    unorderedList: 'Lisi \'e fe\'i fa\'atulagaina',
    orderedList: 'Lisi \'ua fa\'atulagaina',
    subscript: 'Fa\'anini\'i i lalo',
    superscript: 'Fa\'anini\'i i luga',
    hyperlink: 'So\'otaga initaneti',
    toggleFullscreen: 'Fa\'atelē ma fa\'alititi le va\'ai',
    quote: 'Saunoaga',
    left: 'Ōgatasi agavale',
    center: 'Ōgatasi \'ogātotonu',
    right: 'Ōgatasi taumatau',
    justify: 'Ōgatasi lautele',
    print: 'Lolomi',
    outdent: 'Fa\'alaititi le va',
    indent: 'Fa\'atelē le va',
    removeFormat: '\'Ave\'ese le fa\'atulagaga',
    formatting: 'Fa\'atulagaga',
    fontSize: 'Telē o le mata\'itusi',
    align: 'Ōgatasi',
    hr: 'Fa\'aopoopo se laina',
    undo: 'Toe \'ave\'ese',
    redo: 'Toe fai',
    heading1: 'Ulutala 1',
    heading2: 'Ulutala 2',
    heading3: 'Ulutala 3',
    heading4: 'Ulutala 4',
    heading5: 'Ulutala 5',
    heading6: 'Ulutala 6',
    paragraph: 'Palakalafa',
    code: 'Fa\'ailo fa\'akomepiuta',
    size1: 'Matuā laitiiti',
    size2: 'Fa\'alaititi',
    size3: 'Tūlaga masani',
    size4: 'Lāpo\'a feololo',
    size5: 'Lāpo\'a',
    size6: 'Lāpo\'a atu',
    size7: 'Pito i lāpo\'a',
    defaultFont: 'Foliga fou ole mata\'itusi',
    viewSource: 'Va\'ai \'ile tusitusiga fa\'akomepiuta'
  },
  tree: {
    noNodes: 'Lēai ni vāega o maua',
    noResults: 'Lēai ni vāega na maua'
  }
}
