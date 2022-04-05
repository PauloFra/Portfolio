import {useContext , useEffect} from 'react'
import { NewsContext } from '../context/NewsContext'
import List from '../components/List'
import moment from 'moment'
import './News.css'
function News({section}) {
    const {arrNews , getNews ,loading,setLoading} = useContext(NewsContext)
   
   useEffect(()=>{
   getNews(section)
   },[])

   console.log(arrNews)
  return (
    <>
     <main>
     <div className='divHour'>
        <p>
            {moment().format('MMMM Do YYYY, h:mm:ss a')}
        </p>          
        <p>
            21ºC
        </p>
      </div>
    <List arrayN={arrNews} sectionName={section}/>
     </main>
    </>
  )
}
export default News