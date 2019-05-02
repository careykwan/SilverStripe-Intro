if(typeof(ss) == 'undefined' || typeof(ss.i18n) == 'undefined') {
  if(typeof(console) != 'undefined') console.error('Class ss.i18n not defined');
} else {
  ss.i18n.addDictionary('nl', {
    "GRIDFIELD_BULK_UPLOAD.PROGRESS_INFO": "Uploading %s file(s). %s done. %s error(s).",
    "GRIDFIELD_BULK_MANAGER.BULKACTION_EMPTY_SELECT": "U moet minstens een item te selecteren.",
    "GRIDFIELD_BULK_MANAGER.CONFIRM_DESTRUCTIVE_ACTION": "De gegevens zullen permanent verloren. Weet je zeker dat je de pagina wilt verlaten?"
});
}