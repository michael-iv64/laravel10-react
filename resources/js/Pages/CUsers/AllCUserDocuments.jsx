import React, {useState, useEffect} from 'react'
import { Link } from '@inertiajs/react';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';


export default function AllCUserDocuments({cUsers}) {

  const [allDocuments, setAllDocuments] = useState(null);
  const [cUserId, setCUserId] = useState(1);
  const [fullName, setFullName] = useState(null);

  function changeCUserId(e) {
    e.preventDefault();
    setCUserId(e.target.value)
}

  function userDocuments(){
    axios.get(`/c-user-documents/${cUserId}`, {

    }) 
    .then(function(response) {
      setAllDocuments(response.data.documents);
      setFullName(response.data.fullname);
    })
    .catch(function(error){
      console.log(error);
    })
  }
  useEffect(() => {
    userDocuments();
  },[cUserId,])
  console.log('cUsers', cUsers);

  return (
    <div className='w-full h-full rounded-md text-[#414141] text-sm px-1'>
      <div className='flex justify-between'>
        <div className='flex items-center justify-around m-4'>
          Документы пользователя 
          <span className='text-green-600 m-2'> {fullName}</span>
        </div>   
        <div className='flex'>
        <div className='m-2 text-[#3b9e1e]'>Выбрать пользователя</div>
          <select 
            className=" h-[38px] w-[160px] rounded text-white bg-[#85c4eb] "
            value={cUserId} onChange={changeCUserId}>
            {cUsers && cUsers.map(({id, fullname}) => (
              <option key={id} value={id}>{fullname}
              </option>
            ))}
          </select>
        </div>
      </div>
      {allDocuments && allDocuments.map(({name, content, id}) => 
      <div className='px-1'>
        <div className='flex justify-between'>
          <p className='p-2 w-full text-[#414141] text-[16px] border-t-[#3b9e1e] border-t-2'>{name}</p>
          <div className='flex jstify-around mx-2'>
            <Link href={route('edit', id)} className='flex justify-around items-center rounded-full w-28 h-8 border-2 border-[#3b9e1e] bg-[#3b9e1e] text-white m-2 hover:bg-green-50 hover:text-[#3b9e1e] duration-500'>Update</Link>
            <Link method="delete" href={route('delete-document', id)} className='flex justify-around items-center rounded-full w-28 h-8 border-2 border-red-700 bg-red-500 text-white m-2 hover:bg-green-50 hover:text-red-500 duration-500'>Delete</Link>
          </div>
        </div>
        <p className='px-1 m-2  ml-10'>{content}</p>
      </div>)}
      <div className="mt-3 space-y-1">
        <ResponsiveNavLink method="post" href={route('logout')} as="button">
            <p className='flex justify-around items-center rounded-full w-28 h-8 border-2 text-white border-red-700 bg-red-400 m-2 hover:bg-green-50 hover:text-red-500 duration-500'>Log Out</p>
        </ResponsiveNavLink>
    </div>
  </div>
  )
}
