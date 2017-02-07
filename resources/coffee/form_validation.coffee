isValidEmail = (pEmail) ->
  filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  if !filter.test(pEmail)
    return false

  return true