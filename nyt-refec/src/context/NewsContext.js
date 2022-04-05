import {createContext , useState} from 'react'
import api from '../api'

export const NewsContext = createContext()

function NewsProvider({children}) {
    const [arrNews , setArrNews] = useState([])  
    const [loading , setLoading] = useState(true)  
 
  async function getNews(section){
    try{
        const {data} = await api.get(`${section}.json?api-key=MtNvPePihFmABWskxQqc0uobSzMoeT1K`);
        setArrNews(data.results);
        setLoading(false)
    }catch(error){
        console.log(error)
    }
   
  }
  
  return (
    <NewsContext.Provider value={{arrNews , setArrNews , getNews ,loading,setLoading}}>
        {children}
    </NewsContext.Provider>
  )
}

export default NewsProvider